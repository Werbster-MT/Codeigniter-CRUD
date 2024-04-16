{extends file="layout.php"}

{block name=main} 

    <div class="row">
        {if $msg} 
            <div class="alert alert-primary" role="alert">
                {$msg}
            </div>
        {/if}
    </div>

    <div class="row container pt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
        
            <tbody class="trable-group-divider">
                {foreach $products as $product}
                <tr>
                    <th scope="row">{$product->id}</td>
                    <td>{$product->name}</td>
                    <td>{$product->value}</td>
                    <td>
                        <a href="/products/update/{$product->id}" class="btn btn-primary">Update</a>
                        <a href="/products/delete/{$product->id}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}