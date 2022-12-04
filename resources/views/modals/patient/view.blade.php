<div class="modal fade" id="viewPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Patient</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    @component('components.inputs.input')
                        @slot('label', 'Patient Name')
                        @slot('attributes', [
                            'class' => 'form-control',
                            'type' => 'text',
                            'name' => 'patient_name',
                            'id' => 'patient_name',
                            'placeholder' => 'Patient Name',
                            'readonly' => true
                        ])          
                    @endcomponent
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Scheduled Appointment</label>
                        <input class="form-control" type="date" value="" name="scheduled_appointment" id="scheduled_appointment" min={{date('Y-m-d')}}>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @component('components.inputs.input')
                        @slot('label', 'Reasons for Consultation')
                        @slot('attributes', [
                            'class' => 'form-control',
                            'type' => 'text',
                            'name' => 'reasons_for_consultation',
                            'id' => 'reasons_for_consultation',
                            'placeholder' => 'Reasons for Consultation'
                        ])          
                    @endcomponent
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @component('components.inputs.input')
                        @slot('label', 'Remarks')
                        @slot('attributes', [
                            'class' => 'form-control',
                            'type' => 'text',
                            'name' => 'remarks',
                            'id' => 'remarks',
                            'placeholder' => 'Remarks'
                        ])          
                    @endcomponent
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary close-modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
  </div>