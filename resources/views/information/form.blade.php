<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_inf" class="form-label">{{ __('Id Inf') }}</label>
            <input type="text" name="id_inf" class="form-control @error('id_inf') is-invalid @enderror" value="{{ old('id_inf', $information?->id_inf) }}" id="id_inf" placeholder="Id Inf">
            {!! $errors->first('id_inf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="image_inf" class="form-label">{{ __('Image Inf') }}</label>
            <input type="text" name="image_inf" class="form-control @error('image_inf') is-invalid @enderror" value="{{ old('image_inf', $information?->image_inf) }}" id="image_inf" placeholder="Image Inf">
            {!! $errors->first('image_inf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name_inf" class="form-label">{{ __('Name Inf') }}</label>
            <input type="text" name="name_inf" class="form-control @error('name_inf') is-invalid @enderror" value="{{ old('name_inf', $information?->name_inf) }}" id="name_inf" placeholder="Name Inf">
            {!! $errors->first('name_inf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description_inf" class="form-label">{{ __('Description Inf') }}</label>
            <input type="text" name="description_inf" class="form-control @error('description_inf') is-invalid @enderror" value="{{ old('description_inf', $information?->description_inf) }}" id="description_inf" placeholder="Description Inf">
            {!! $errors->first('description_inf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>