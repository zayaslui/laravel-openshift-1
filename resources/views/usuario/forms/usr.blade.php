
  <div class="form-group">
    <label for="exampleInputEmail1">Nick</label>
   <input type="text" class="form-control" id="exampleInputEmail1" name="name"aria-describedby="emailHelp" placeholder="Enter nick"  @if(isset($user)) value="{{ $user->name }}" @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" name="email"aria-describedby="emailHelp" placeholder="Enter email" @if(isset($user)) value="{{ $user->email }} @endif">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" @if(isset($user)) value="{{ $user->password}}" @endif">
  </div>