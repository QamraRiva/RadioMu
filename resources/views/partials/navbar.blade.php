
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">RadioMU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Programs") ? 'active' : '' }}" href="/programs">PROGRAMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Articles") ? 'active' : '' }}" href="/articles">ARTICLES</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
