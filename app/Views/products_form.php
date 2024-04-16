{extends file="layout.php"}
{block name=main}
    <div class="row flex-grow-1">
    <div class="row">
        <div class="col">
            {if $msg}
                <div class="alert alert-{$msgType}" role="alert">
                    {$msg}
                    {if $errors}
                        <ul>
                            {foreach $errors as $error}
                            <li>{$error}</li>
                            {/foreach}
                        </ul>
                    {/if}
                </div>
            {/if}
        </div>
    </div>
    <div class="row pt-3">
        <form method="post">
            <input type="hidden" name="id" value="{$product->id|default:''}" />
            <div class="row d-flex">
                <div class="mb-3 col col-12 col-md-4">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" name="name" value="{$product->name|default:''}" />
                </div>

                <div class="mb-3 col col-12 col-md-4">
                    <label class="form-label fw-bold">Value</label>
                    <input type="text" class="form-control" name="value" value="{$product->value|default:''}" />
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
    </div>
{/block}