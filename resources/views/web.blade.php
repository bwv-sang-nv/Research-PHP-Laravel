<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @includeWhen(1=='1','welcome')
    {{-- @error('username')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror --}}
    @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $err)
         <li>{{ $err }}</li> 
      @endforeach
    </ul>
    @endif
    <form method="post" action="/" id="login">
          @csrf 
          <input type="text" name="username" value="{{ old('username')?old('username'): $username }}">
          <x-input-group name="password" type="text" value="" />
          <button type="submit"> submit</button>
      
          @if (strlen($username) > 1)
            I have one record!
          @endif
    </form>
</body>
</html>