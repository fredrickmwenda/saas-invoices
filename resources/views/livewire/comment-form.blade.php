<form wire:submit.prevent="submitComment">
    <input type="hidden" name="parent_id" wire:model="parentId">
    <input type="hidden" name="blog_id" :value="$blogId">

    @if (!$authenticated)
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" wire:model="name" placeholder="Name">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control" wire:model="email" placeholder="Email">
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" wire:model="website" placeholder="Website">
    </div>
    @endif

    <div class="form-group">
        <textarea class="form-control" wire:model="content" placeholder="Comment"></textarea>
    </div>
    
    <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
        <input type="checkbox" class="custom-control-input" id="save">
        <label class="custom-control-label" for="save">Save my name, email, and website in this browser for the next time I comment.</label>
    </div>
    
    <button type="submit" class="btn btn__primary btn__icon justify-content-between btn__xxl">
        <span>Submit Comment</span><i class="icon-arrow-right"></i>
    </button>
</form>
