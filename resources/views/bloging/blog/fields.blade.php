<div class="row gx-10 mb-5">
    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('title', __('Title').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' =>  __('Title'), 'required']) }}
        </div>
    </div>

    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('category',__('Category').':', ['class' => 'form-label mb-3']) }}
            {{ Form::select('category_id', $categories, null, ['id'=>'categoryId','class' => 'form-select io-select2 ','placeholder' =>  __('Category'), 'data-control' => 'select2']) }}
        </div>
    </div>

    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('tag',__('Tag').':', ['class' => 'form-label mb-3']) }}
            {{ Form::select('tag_id[]', $tags, null, ['id'=>'tag_id','class' => 'form-select io-select2 ','placeholder' =>  __('tags'), 'data-control' => 'select2', 'multiple']) }}

        </div>
    </div>

  


   
    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('short_description', __('Short Description').':', ['class' => 'form-label mb-3']) }}
            {{ Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => __('short description'),'rows'=>'3']) }}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-5">
            {{ Form::label('description', __('Description').':', ['class' => 'form-label mb-3']) }}
            {{ Form::textarea('description', null, ['id' => 'editor']) }}
        </div>
    </div>
        <!-- image and gallery start-->
    <div class="card mb-4 styled-card" id="section-2">
        <div class="card-body">
            <h5 class="mb-4">{{ 'Images' }}</h5>

                     
           

            <div class="mb-4">
                           
            {{ Form::label('image',__('Image 1200*700').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::file('image', ['id'=>'image','class' => 'form-control','required']) }}

            </div>
        </div>
    </div>
    <!-- image and gallery end-->

    <!--SEO Meta -->
    <div class="card mb-4 styled-card" id="section-2">
        <div class="card-body">
            <h5 class="mb-4">{{ 'SEO Meta' }}</h5>
            <div class="mb-5">
                {{ Form::label('Meta Title', __('Meta Title').':', ['class' => 'form-label mb-3']) }}
                {{ Form::text('meta_title', null,['class' => 'form-control', 'placeholder' =>  __('meta title')]) }}
            </div>
            <div class="mb-5">
                {{ Form::label('meta_description', __('Meta Description').':', ['class' => 'form-label mb-3']) }}
                {{ Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => __('meta description'),'rows'=>'7']) }}
            </div>
            <div class="mb-4">
                           
                {{ Form::label('meta_image',__('Meta Image').':', ['class' => 'form-label required mb-3']) }}
                {{ Form::file('meta_image', ['id'=>'meta_image','class' => 'form-control','required']) }}
    
            </div>
        </div>
    </div>
<div class="float-end d-flex mt-5">
    {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('clients.index') }}" type="reset"
       class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
</div>
