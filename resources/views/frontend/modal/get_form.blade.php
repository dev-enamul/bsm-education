@csrf
<input type="hidden" name="id" value="{{$data->id}}">
@if ($type=='textarea')
    <textarea class="form-control"  name="val" id="" cols="30" rows="10" required>{{$data->val}}</textarea>
@endif

@if ($type=='text')
   <input class="form-control" value="{{$data->val}}" type="text" name="val" id="" required>
@endif  

@if ($type=='number')
   <input class="form-control" value="{{$data->val}}" type="number" name="val" id="" required>
@endif 

@if ($type=='file')  
    <img class="mb-3 w-100" src="{{asset($data->val)}}" alt="" id="output">
    <small>Image Size: <span class="text-danger"> {{$size}} </span> </small> <br>
    <input class="mb-2"  name="val" type="file"  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" accept="jpeg,png,jpg,gif,svg" required/>
@endif 



<button class="button-1 mt-2 w-100" type="submit">Update</button> 
