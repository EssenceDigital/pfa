 {{-- Used by the events.edit view --}}

<ul class="media-list">
    {{-- If fights exist then iterate through them --}}
    @foreach($event->fights as $fight)

        <li class="media">
            <!-- Avatar for fight -->
            <div class="media-left media-middle">
                <a href="#">
                    <img src="{{ asset('assets/images/placeholder.jpg') }}" class="img-circle" alt="">
                </a>
            </div>
            <!-- /Avatar for event -->

            <!-- Title for event -->
            <div class="media-body">
                <div class="media-heading text-semibold">{{ $fight->fighter_a . ' (' . $fight->fighter_a_record . ', ' . $fight->fighter_a_gym . ') vs. ' . $fight->fighter_b . ' ('. $fight->fighter_b_record . ', ' . $fight->fighter_b_gym . ')'  }}</div>
            </div>
            <!-- /Title for event -->

            <!-- Actions for event -->
            <div class="media-right media-middle">
                <ul class="icons-list text-nowrap">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="/fights/{{ $fight->id }}/edit"><i class="icon-user"></i> Edit</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#fightModal{{ $fight->id }}"><i class="icon-trash"></i> Remove</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Actions for event -->
        </li>

    @endforeach
</ul>

{{-- If no fights found then show this alert --}}
@if($event->fights->isEmpty())
    <div class="alert alert-info alert-styled-left alert-bordered">
        <strong>Heads up!</strong> There are currently no fights on this card. <strong>Add some by navigating with the tabs above</strong>
    </div>
@endif