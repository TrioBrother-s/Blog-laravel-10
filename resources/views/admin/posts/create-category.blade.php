<x-layout>
    <x-setting-category heading="Создание тега">
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <!-- Поля для категории -->
        <x-form.input name="slug" placeholder="Slug тег" required/>

        <x-form.input name="name" placeholder="Name тег" required/>

        <x-form.button>Создать категорию</x-form.button>
    </form>
    </x-setting-category>
</x-layout>
