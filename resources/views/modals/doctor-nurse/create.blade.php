<div class="modal fade" id="addDoctorNurse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Doctor / Nurse</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('doctor-nurse.store') }}" method="POST" id="add-doctor-nurse-form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'First Name')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'first_name',
                                'id' => 'first_name',
                                'placeholder' => 'First Name'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Middle Name')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'middle_name',
                                'id' => 'middle_name',
                                'placeholder' => 'Middle Name'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Last Name')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'last_name',
                                'id' => 'last_name',
                                'placeholder' => 'Last Name'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Position')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'position',
                                'id' => 'position',
                                'placeholder' => 'Position'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="fw-bold">Availability</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'monday',
                                'id' => 'monday',
                                'value' => 'monday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="monday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="monday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'tuesday',
                                'id' => 'tuesday',
                                'value' => 'tuesday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="tuesday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="tuesday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'wednesday',
                                'id' => 'wednesday',
                                'value' => 'wednesday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="wednesday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="wednesdayday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'thursday',
                                'id' => 'thursday',
                                'value' => 'thursday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="thursday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="thursday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'friday',
                                'id' => 'friday',
                                'value' => 'friday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="friday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="friday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'saturday',
                                'id' => 'saturday',
                                'value' => 'saturday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="saturday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="saturday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        @component('components.inputs.input')
                            @slot('label', '')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'sunday',
                                'id' => 'sunday',
                                'value' => 'sunday',
                                'placeholder' => 'Position',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">From</label>
                            <input class="form-control" type="time" value="" id="sunday_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="example-time-input" class="form-control-label">To</label>
                            <input class="form-control" type="time" value="" id="sunday_to">
                        </div>
                    </div>
                    <div class="col-md-3 mt-2-custom">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_working" value="" id="flexCheckChecked">
                            <label for="flexCheckChecked">
                            Day-off / No work
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary">Save</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>