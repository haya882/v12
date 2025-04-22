<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->with('image')->paginate(10);
        // dd($categories[0]->image()->first());

        //    $categories =DB::table('categories')
        //                 ->select('categories.id','categories.name','categories.description','category_images.path')
        //                 ->innerJoin('category_images','categories.id','category_images.cat_id')
        //                 ->get();

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // استخراج البيانات بدون صورة
        $data = $request->only('name', 'description');

        // إنشاء الكاتيجوري
        $category = Category::create($data);
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $img_name);
        $category->image()->create([
            'path' => $img_name,
        ]);
        // حفظ الصورة
        // $imageFile = $request->file('image');
        // $imgName = uniqid() . '_' . $imageFile->getClientOriginalName();
        // $imageFile->move(public_path('images'), $imgName);
        
        // ربط الصورة بالكاتيجوري (على فرض أن العلاقة موجودة image())
        $category->image()->create([
            'path' => $img_name
        ]);
        
        // dd($request->all());
        // إعادة التوجيه مع رسالة نجاح
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully!');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //$category = Category::findOrFail($id);
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        if ($request->hasFile('image')) {
            $oldImage = $category->image()?->first();
            if ($oldImage && File::exists(public_path('images/' . $oldImage->path))) {
                File::delete(public_path('images/' . $oldImage->path));
            }
            $img_name = rand() . time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $img_name);
            if ($oldImage) {
                $oldImage->update([
                    'path' => $img_name,
                ]);
            } else {
                $category->image()->create([
                    'path' => $img_name,
                ]);
            }
        }
        return redirect()
            ->route('admin.categories.index')
            ->with('info', 'Category updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully!');

    }
}
