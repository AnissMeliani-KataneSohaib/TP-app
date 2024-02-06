<!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
      
        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            {{-- @method('post') --}}
            <div class="mb-3">
                <label for="" class="form-label">Réference:</label>
                <input type="text" class="form-control" name="RefPdt" value="{{ old('RefPdt') }}"/>
                @error('RefPdt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Libellé:</label>
                <input type="text" class="form-control" name="libPdt" value="{{ old('libPdt') }}"/>
                @error('libPdt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Prix:</label>
                <input type="text" class="form-control" name="Prix" value="{{ old('Prix') }}" />
                @error('Prix')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantité:</label>
                <input type="text" class="form-control" name="Qte" value="{{ old('Qte') }}" />
                @error('Qte')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description:</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" />
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">photo produit:</label>
                <input type="file" class="form-control" name="image"  />
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type:</label>
                <input type="text" class="form-control" name="type" value="{{ old('type') }}" />
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
