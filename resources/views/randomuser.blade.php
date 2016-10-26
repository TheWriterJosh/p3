<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Random Alliterative Username Generator</title>
    </head>
    <body>
      <form action="/randomuser" method="POST">
        {{ csrf_field() }}
        <label>How many usernames would you like?</label>
        <input type="text" name="usernames"/>
        <button type="submit">Generate!</button><br><br>
      </form>
      @if(count($errors) > 0)
          @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      @endif
      <a href="/">Go home!</a>
    </body>
</html>
