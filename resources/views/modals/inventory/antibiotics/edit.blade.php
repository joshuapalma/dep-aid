<div class="modal fade" id="editAntibiotics" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Antibiotics</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" method="POST" id="edit-antibiotics-form" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Medicine Name')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'medicine_name',
                                'id' => 'edit_medicine_name',
                                'placeholder' => 'Medicine Name'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Brand')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'brand',
                                'id' => 'edit_brand',
                                'placeholder' => 'Brand'
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <a href="javascript:void(0)" class="btn btn-default mt-4 quantity-btn" id="minus-btn">
                            <i class="fa-solid fa-minus"></i>
                        </a>
                    </div>
                    <div class="col-md-8">
                        @component('components.inputs.input')
                            @slot('label', 'Quantity')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'number',
                                'name' => 'quantity',
                                'id' => 'edit_quantity',
                                'placeholder' => 'Quantity',
                                'value' => '',
                            ])          
                        @endcomponent
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0)" class="btn btn-default mt-4 quantity-btn" id="add-btn">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @component('components.inputs.input')
                            @slot('label', 'Type')
                            @slot('attributes', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'name' => 'type',
                                'id' => 'type',
                                'placeholder' => 'Type',
                                'value' => 'Antibiotics',
                                'readonly' => true
                            ])          
                        @endcomponent
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Manufacturer Date</label>
                            <input class="form-control" type="date" value="" name="manufacturer_date" id="edit_manufacturer_date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Expiration Date</label>
                            <input class="form-control" type="date" value="" name="expiration_date" id="edit_expiration_date">
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