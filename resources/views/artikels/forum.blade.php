@csrf

<div class="mb-4">
    <label for="titel" class="block text-gray-700 font-bold mb-2">Titel:</label>
    <input type="text" id="titel" name="titel" value="{{ $artikel->titel }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4">
    <label for="titel" class="block text-gray-700 font-bold mb-2">Device:</label>
        <select name="tag_id" class="w-full rounded" autocomplete="off">
            <option value="">Select a Device</option>
           @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ $artikel->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->naam }}</option>
            @endforeach
        </select>
</div>

<div class="mb-4">
    <label for="titel" class="block text-gray-700 font-bold mb-2">Game:</label>
    <select name="game_id" class="w-full rounded" autocomplete="off">
        <option value="">Select a Game</option>
        @foreach($games as $game)
            <option value="{{ $game->id }}" {{ $artikel->game_id == $game->id ? 'selected' : '' }}>{{ $game->naam }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="titel" class="block text-gray-700 font-bold mb-2">Categorie:</label>
    <select name="categorie_id" class="w-full rounded" autocomplete="off">
        <option value="">Select a Game</option>
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}" {{ $artikel->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->naam }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="titel" class="block text-gray-700 font-bold mb-2">Photo:</label>
    <select name="photo_id" class="w-full rounded" autocomplete="off">
        <option value="">Select a Photo</option>
        @foreach($photos as $photo)
            <option value="{{ $photo->id }}" {{ $artikel->photo_id == $photo->id ? 'selected' : '' }}>{{ $photo->foto }}</option>
        @endforeach
    </select>
</div>


<textarea id="inhoud" type="text" name="inhoud" field="inhoud" placeholder="Description..." class="w-full min-h-44 max-h-80 rounded-md border-black" autocomplete="off">{{ $artikel->inhoud }}</textarea>  <br> <br>
