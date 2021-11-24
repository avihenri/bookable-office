{{-- START: FORM CONTAINER --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">{{ $option['page-action-title'] }}</h4>
        </div>
        <div class="card-body">
            <form role="form" action="{{$options['submit-url'] ?? dirname(url()->current())}}">
                <div class="row">
                    @if (isset($id)) @method('PUT') @endif
                    @csrf
                    @foreach ($formFields as $field)
                        <div class="
                            @switch($field['size'] ?? '')
                                @case('sm')
                                    col-3
                                    @break
                                @case('md')
                                    col-6
                                    @break
                                @default
                                    col-12
                            @endswitch
                            "
                        >
                            <label class="bmd-label-floating">{{ $field]'name' }}</label>
                            @switch($property['type'] ?? '')
                                @case('select')
                                    {{-- add select stuff --}}
                                    @break

                                @case('text')
                                @case('number')
                                @case('date')
                                    <input
                                        type="{{$field['type']}}"
                                        class="form-control"
                                        id={{$field['name']}}
                                        name={{$field['name']}}
                                        value="{{$field['value'] && ''}}"
                                        autocomplete="off"
                                        @if ($field['editable'] === false)
                                            readonly
                                        @endif
                                        @if (isset($field['step']))
                                            step="{{$property['step']}}"
                                        @endif
                                        @if (isset($field['attributes']))
                                            @foreach ($field['attributes'] as $key => $value)
                                                {{$key.'='.$value}}
                                            @endforeach
                                        @endif
                                    >
                                    @break

                                @case('checkbox')

                                @break
                                
                            @endswitch
                        </div>
                    @endforeach
                </div>

                {{--BUTTONS --}}
                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary pull-right">
                        @if (isset($id))
                            <span>Update</span>
                        @else
                            <span>Add</span>
                        @endif
                    </button>
                    <div class="clearfix"></div>
                </div>
                
            </form>
        </div>
        </div>
    </div>
</div>
{{-- END: FORM CONTAINER --}}