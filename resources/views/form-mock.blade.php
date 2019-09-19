<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="edit-form form-container" action="/api/reviews/3" method="POST">
        @csrf
        @method('PUT')
        <textarea class="edit-form__body" name="body" id="" cols="30" rows="10" v-model="reviewsEdits"></textarea>
        <input class="edit-form__submit-btn" :disabled="isDisable" type="submit" value="edit review">
    </form>
</body>
</html>
    

