<!-- About Category Field -->
<div class="form-group col-sm-12">
    {!! Form::label('about_category', 'About Category:') !!}
    <select name ="about_category" class="select2 form-control" id="about_category" required>
        <option value="">select category</option>
                <option value="history">History</option>
                <option value="church_structure">Church Structure</option>
                <option value="community_role">Community Role</option>
                <option value="friends_partners">Friends & Partners</option>
              </select>

</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

