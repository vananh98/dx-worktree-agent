@php
    $category = $category ?? null;
@endphp

<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $category?->name) }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
           value="{{ old('slug', $category?->slug) }}" placeholder="Leave blank to auto-generate">
    @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description', $category?->description) }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="parent_id" class="form-label">Parent Category</label>
    <select name="parent_id" id="parent_id" class="form-select @error('parent_id') is-invalid @enderror">
        <option value="">-- None --</option>
        @foreach ($parents as $parent)
            <option value="{{ $parent->id }}" @selected(old('parent_id', $category?->parent_id) == $parent->id)>
                {{ $parent->name }}
            </option>
        @endforeach
    </select>
    @error('parent_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3 form-check">
    <input type="hidden" name="is_active" value="0">
    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1"
           @checked(old('is_active', $category?->is_active ?? true))>
    <label for="is_active" class="form-check-label">Active</label>
</div>
