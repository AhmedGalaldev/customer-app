<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name"  value="{{old('name') ?? $customer->name}}" class="form-control">
</div>
<div class="text-danger">{{$errors->first('name')}}</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{old('email') ?? $customer->email}}" class="form-control">
</div>
<div class="text-danger">{{$errors->first('email')}}</div>
                 
<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Status</option>
        @foreach ($customer->activeOptions() as $key => $value)
            <option value="{{$key}}" {{$customer->active ==$value ?'selected':''}}>{{$value}}</option>        
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="active">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        <option value="" disabled>Select Company</option>
        @foreach ($companies as $company)
            <option value="{{$company->id}}" {{$company->id==$customer->company_id ?'selected':''}}>{{$company->name}}</option>      
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="image">Profile</label>
    <br>
    <input type="file" name="image" >
</div>
<button type="submit" class="btn btn-secondary">Submit</button>
@csrf