<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body>
    <div class="dashboard">
        <div class="container">
            @include('components.sidebar')
            <!-- ------------End of Side -------------------->

            <main>
                <div class="spacial-content">
                    <h1>Dashboard</h1>
                </div>
                <div class="date">
                    <input type="date" />
                </div>
                <div class="insights">
                    <div class="income">
                        <span class="material-icons-sharp"> stacked_line_chart </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Users</h3>
                                <h1>{{ $users_count }}</h1>
                            </div>

                        </div>
                    </div>
                    <div class="sales">
                        <span class="material-icons-sharp"> analytics </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Categories</h3>
                                <h1>{{ $categories_count }}</h1>
                            </div>
                        </div>
                    </div>
                    <!--------------- End Sales ------------------->
                    <div class="expenses">
                        <span class="material-icons-sharp"> bar_chart </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Products</h3>
                                <h1>{{ $products_count }}</h1>
                            </div>

                        </div>
                    </div>
                    <!--------------- End Expenses ------------------->

                    <!--------------- End Income ------------------->
                </div>
                <!--------------- End insights ------------------->
                <div class="recent-orders">
                    <h2>Resent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Category</th>
                                <th>Price</th>
                                <!-- <th>Product Name</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Elegant anklet</td>
                                <td>Acc-W-065</td>
                                <td>Accessories</td>
                                <td class="warning">$25.00</td>
                                <td class="primary">Details</td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
            </main>
            <!----------------End of Main  -------------->

            <div class="right">
                <div class="top">
                    <div class="language">
                        <h3>Language</h3>
                        <span class="material-icons-sharp"> language </span>
                    </div>
                    <div class="notification">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <button id="menu-btn">
                        <span class="material-icons-sharp"> menu </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active"> light_mode </span>
                        <span class="material-icons-sharp"> dark_mode </span>
                    </div>
                    <div class="profile-menu">
                        <div class="profile" style="gap:1rem;">
                            <div class="info">
                                <p>Hey, <b>{{ auth()->user()->name }}</b></p>
                            </div>
                            <a href="{{ route('admin.profile') }}">
                                <div class="profile-photo">
                                    <img src="{{ asset('images/' . auth()->user()->avatar) }}" alt="Profile Photo" />
                                </div>
                            </a>
                        </div>

                        <div class="menu-items">
                            <a href="{{ route('admin.profile') }}" class="menu-item">Profile</a>
                            <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="menu-item logout">Logout</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!----------------End of Top  -------------->
                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="images/team2.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p>
                                    <b>Shatha Doghmosh</b> received her order of Night lion tech
                                    GPS drone.
                                </p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-photo">
                                <img src="images/team2.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p>
                                    <b>Shatha Doghmosh</b> received her order of Night lion tech
                                    GPS drone.
                                </p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile-photo">
                                <img src="images/team2.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p>
                                    <b>Shatha Doghmosh</b> received her order of Night lion tech
                                    GPS drone.
                                </p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------End of Recent Updates  -------------->
                <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">local_mall</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFFLINE ORDERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="dandger">-17%</h5>
                            <h3>1100</h3>
                        </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp"> person</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUSTOMERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+25%</h5>
                            <h3>849</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>

    <script src="{{ asset('assets/js/dashbord.js') }}"></script>
</body>

</html>
