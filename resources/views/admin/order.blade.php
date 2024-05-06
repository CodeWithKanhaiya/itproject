
@include('admin.layout.header')
<div class="addproduct">
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center pt-3">Order</h3>
                <form action="" method="get">
                    <div class="form-group mt-4 mb-3">
                        <label for="productName">Product Name:</label>
                        <input type="text" class="form-control" id="productName" placeholder="Enter product name"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="quantity">TotalPrice:</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Total Price" required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="customerName">Customer Name:</label>
                        <input type="text" class="form-control" id="customerName" placeholder="Enter customer name"
                            required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Enter address"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Order</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
@include('admin.layout.fotter')