<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$zone->id}}">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$zone->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$zone->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$zone->id}}">Edit details for {{$zone->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/update-zone-details" method="post">
                    @method('PATCH')
                    <div class="row">
                        <div class="mx-auto w-75">
                            <div>
                                <input type="hidden" name="id" value="{{$zone->id}}">
                            </div>
                            <div>
                                <div><label for="name">Zone Name:</label></div>
                                <div><input type="text" class="form-control" name="name" required value="{{$zone->name}}"></div>
                            </div>
                            <div>
                                <div><label for="description">Zone Description:</label></div>
                                <div>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control" required>
                                    {{$zone->description}}
                                </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                    @csrf
                </form>


            </div>

        </div>
    </div>
</div>
