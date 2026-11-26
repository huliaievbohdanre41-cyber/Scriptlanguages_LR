<div style="margin-bottom: 15px;">
    <label for="full_name" style="display: block; font-weight: bold; margin-bottom: 5px;">ПІБ *</label>
    <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $teacher->full_name ?? '') }}" style="width: 100%; padding: 8px; border: 1px solid #000000; box-sizing: border-box; background: #ffffff;">
    @error('full_name')
    <span style="color: #d9534f; font-size: 13px;">{{ $message }}</span>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label for="department" style="display: block; font-weight: bold; margin-bottom: 5px;">Кафедра *</label>
    <input id="department" name="department" type="text" value="{{ old('department', $teacher->department ?? '') }}" style="width: 100%; padding: 8px; border: 1px solid #000000; box-sizing: border-box; background: #ffffff;">
    @error('department')
    <span style="color: #d9534f; font-size: 13px;">{{ $message }}</span>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label for="academic_title" style="display: block; font-weight: bold; margin-bottom: 5px;">Вчене звання / посада *</label>
    <input id="academic_title" name="academic_title" type="text" value="{{ old('academic_title', $teacher->academic_title ?? '') }}" style="width: 100%; padding: 8px; border: 1px solid #000000; box-sizing: border-box; background: #ffffff;">
    @error('academic_title')
    <span style="color: #d9534f; font-size: 13px;">{{ $message }}</span>
    @enderror
</div>

<div style="margin-bottom: 15px;">
    <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email *</label>
    <input id="email" name="email" type="email" value="{{ old('email', $teacher->email ?? '') }}" style="width: 100%; padding: 8px; border: 1px solid #000000; box-sizing: border-box; background: #ffffff;">
    @error('email')
    <span style="color: #d9534f; font-size: 13px;">{{ $message }}</span>
    @enderror
</div>

<div style="margin-bottom: 20px;">
    <label for="experience_years" style="display: block; font-weight: bold; margin-bottom: 5px;">Стаж (років) *</label>
    <input id="experience_years" name="experience_years" type="number" min="0" max="70" value="{{ old('experience_years', $teacher->experience_years ?? 0) }}" style="width: 100%; padding: 8px; border: 1px solid #000000; box-sizing: border-box; background: #ffffff;">
    @error('experience_years')
    <span style="color: #d9534f; font-size: 13px;">{{ $message }}</span>
    @enderror
</div>
