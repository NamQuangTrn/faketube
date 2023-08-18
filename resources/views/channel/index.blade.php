<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="nav container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Faketube</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">List Channel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Add</a>
              </li>             
            </ul>
          </div>
        </div>
      </nav>
</div>
<div class=" m-5">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Channel Name</th>
            <th scope="col">Descripion</th>
            <th scope="col">Subscribers Count</th>
            <th scope="col">URL</th>
			<th scope="col">Action</th>
		</tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->channel_id }}</td>
                <td>{{ $item->ChannelName }}</td>
                <td>{{ $item->descripion }}</td>
                <td>{{ $item->subscriberscount }}</td>
                <td>{{ $item->URL }}</td>
				<td class="d-flex flex-col justify-content-around">
					<button class="btn btn-primary me-2">Edit</button>
					<button class="btn btn-warning">Delete</button>
				</td>
            </tr>
        @endforeach
        </tbody>
      </table>
</div>