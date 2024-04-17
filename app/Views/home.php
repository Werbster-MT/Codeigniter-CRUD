{extends file="layout.php"}
{block name=main}
    <div class="row pb-5">
        <div class="col-md-8 offset-md-2 mt-5">
            <div class="card">
                <div class="card-header">
                    <h5>Welcome to Product Management System</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">This system allows you to manage products efficiently. You can perform the following actions:</p>
                    <ul>
                        <li><strong>Create:</strong> Add new products to the system.</li>
                        <li><strong>Read:</strong> View a list of all products and their details.</li>
                        <li><strong>Update:</strong> Modify existing product information.</li>
                        <li><strong>Delete:</strong> Remove products from the system.</li>
                    </ul>
                    <a href="/products" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
{/block}