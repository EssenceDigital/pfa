 {{-- Used by the events.edit view --}}

 <!-- Form input -->
{!! Form::open(['url' => 'fights', 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <input type="hidden" name="event_id" value="{{ $event->id }}">
    
    <legend class="text-semibold">First Fighter</legend>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter A:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_a', null, ['class' => 'form-control', 'placeholder' => 'First fighter']) }}
            <div class="form-control-feedback">
                <i class="icon-person"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter A Record:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_a_record', null, ['class' => 'form-control', 'placeholder' => 'First fighters record']) }}
            <div class="form-control-feedback">
                <i class="icon-medal"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter A Gym:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_a_gym', null, ['class' => 'form-control', 'placeholder' => 'First fighters gym']) }}
            <div class="form-control-feedback">
                <i class="icon-city"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <legend class="text-semibold">Second Fighter</legend>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter B:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_b', null, ['class' => 'form-control', 'placeholder' => 'Second fighter']) }}
            <div class="form-control-feedback">
                <i class="icon-person"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter B Record:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_b_record', null, ['class' => 'form-control', 'placeholder' => 'Second fighters record']) }}
            <div class="form-control-feedback">
                <i class="icon-medal"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Fighter B Gym:</label>
        <div class="col-lg-9">
            {{ Form::text('fighter_b_gym', null, ['class' => 'form-control', 'placeholder' => 'Second fighters gym']) }}
            <div class="form-control-feedback">
                <i class="icon-city"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>

    <legend class="text-semibold">Fight Details</legend>

    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Weight:</label>
        <div class="col-lg-9">
            {{ Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'Weight class']) }}
            <div class="form-control-feedback">
                <i class="icon-balance"></i>
            </div>
            <span class="help-block">(Required)</span>
        </div>
    </div>
    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Discipline:</label>
        <div class="col-lg-9">
            {{ Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'Ex. MMA']) }}
            <div class="form-control-feedback">
                <i class="icon-strategy"></i>
            </div>
            <span class="help-block">(Optional) - Leave blank if fight hasn't happened</span>
        </div>
    </div>
    <div class="form-group has-feedback has-feedback-left">
        <label class="col-lg-3 control-label">Result:</label>
        <div class="col-lg-9">
            {{ Form::text('result', null, ['class' => 'form-control', 'placeholder' => 'Fight result']) }}
            <div class="form-control-feedback">
                <i class="icon-trophy2"></i>
            </div>
            <span class="help-block">(Optional) - Leave blank if fight hasn't happened</span>
        </div>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary">Add <i class="icon-arrow-right14 position-right"></i></button>
    </div>
</form>
