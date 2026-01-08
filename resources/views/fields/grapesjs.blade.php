<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
>

<div class="panel__top">
    <div class="panel__basic-actions"></div>
</div>

<div
    wire:ignore
    class="filament-grapesjs"
    x-data="grapesjs({
            container: '#gjs_{{$getId()}}',
            state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }},
            statePath: '{{ $getStatePath() }}',
            readOnly: {{ $isDisabled() ? 'true' : 'false' }},
            tools: @js($getTools()),
            plugins: @js($getPlugins()),
            settings: @js($getSettings()),
            minHeight: @js($getMinHeight())
        })"
>

    <div id='gjs_{{$getId()}}' class="grapesjs-wrapper">
        {!! $getHtmlData() ?: '<div class="gjs-empty-placeholder" style="padding: 100px; text-align: center; color: #aaa; font-size: 20px;">Drag blocks here to start editing</div>' !!}
    </div>

</div>

<div id="blocks"></div>
</x-dynamic-component>