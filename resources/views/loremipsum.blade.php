<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Lorem Ipsum Generator</title>
    </head>
    <body>
      <form action="/loremipsum" method="POST">
        {{ csrf_field() }}
        <label>How many paragraphs would you like?</label>
        <input type="text" name="paragraphs"/>
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
