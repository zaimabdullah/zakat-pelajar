<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">{{config('app.name', 'e-Zakat')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Utama<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts/create">Permohonan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Senarai Permohonan</a>
      </li>
    </ul>
  </div>
</nav>