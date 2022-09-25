<div>
    <form wire:submit.prevent='articleStore'>
        <div class="mb-3">
            <label for="">Judul</label>
            <input type="text" wire:model='title' class="form-control">
        </div>
        <div class="mb-3" wire:ignore>
            <textarea id="my-ckeditor" wire:model='content'></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit" id="my-submit">Submit</button>
        </div>
    </form>

    <ul>
        @foreach ($articles as $item)
        <li>
            <a href="{{ route('article.show',$item->id) }}">{{ $item->title }}</a>
        </li>
        @endforeach
    </ul>

    <script>
        $(document).ready(function(){
            const editor = CKEDITOR.replace( 'my-ckeditor' );
            editor.on('change',function(event){
                console.log(event.editor.getData());
                @this.set('content',event.editor.getData());
            })

            window.addEventListener('articleStore', event => {
                CKEDITOR.instances['my-ckeditor'].setData('');
            })
        })
       

    </script>
</div>