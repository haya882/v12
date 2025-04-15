<?php
namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

        // عرض المدفوعات
        public function index()
        {
            // $payments = Payment::all();
            return view('dashboard.payments.index', compact('payments'));


        }

        // عرض نموذج إضافة دفع جديد
        public function create()
        {
            return view('dashboard.payments.create');
        }

        // تخزين الدفع الجديد
        public function store(Request $request)
        {
            // إضافة عملية تخزين الدفع هنا
        }

        // عرض تفاصيل الدفع
        public function show(Payment $payment)
        {
            return view('admin.payments.show', compact('payment'));
        }

        // حذف الدفع
        public function destroy(Payment $payment)
        {
            $payment->delete();
            return redirect()->route('admin.payments.index')->with('msg', 'Payment deleted successfully')->with('type', 'success');
        }
    }


