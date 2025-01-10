<?php
// navbar.php
?>
<style>
  :root {
    --pinterest-dark: #121212;
    --pinterest-gray: #2c2c2c;
    --pinterest-red: #e60023;
    --pinterest-hover: #363636;
    --text-primary: #ffffff;
    --text-secondary: #efefef;
    --nav-height: 64px;
  }

  .navbar {
    background: var(--pinterest-dark);
    padding: 1rem 2rem;
    position: fixed;
    width: 100%;
    z-index: 1000;
    height: var(--nav-height);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .nav-container {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .nav-left {
    display: flex;
    align-items: center;
    gap: 2rem;
  }

  .nav-brand {
    color: var(--text-primary);
    font-weight: 700;
    font-size: 1.5rem;
    text-decoration: none;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  
  .nav-brand:hover {
    color: var(--red);
  }

  .nav-links {
    display: flex;
    gap: 1rem;
    align-items: center;
  }

  .nav-link {
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.2s ease;
    padding: 0.5rem 1rem;
    border-radius: 24px;
  }

  .nav-link:hover {
    background: var(--pinterest-hover);
    color: var(--text-primary);
  }

  .nav-link.active {
    background: var(--pinterest-red);
    color: var(--text-primary);
  }

  .search-bar {
    background: var(--pinterest-gray);
    border-radius: 24px;
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    flex: 1;
    max-width: 300px;
    margin: 0 1rem;
  }

  .search-bar input {
    background: none;
    border: none;
    color: var(--text-primary);
    width: 100%;
    outline: none;
  }

  .search-bar input::placeholder {
    color: var(--text-secondary);
  }

  .mobile-menu {
    display: none;
    background: none;
    border: none;
    color: var(--text-primary);
    cursor: pointer;
    padding: 0.5rem;
  }

  @media (max-width: 768px) {
    .navbar {
      padding: 1rem;
    }

    .nav-links {
      display: none;
    }

    .search-bar {
      max-width: 200px;
    }

    .mobile-menu {
      display: block;
    }

    .nav-brand {
      font-size: 1.2rem;
    }
  }
</style>

<nav class="navbar">
  <div class="nav-container">
    <div class="nav-left">
      <a href="?page=home" class="nav-brand">
        <svg viewBox="0 0 24 24">
          <path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
        </svg>
        KULINER
      </a>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </div>
      <div class="nav-links">
        <?php
        $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $menu_items = [
          'home' => 'Beranda',
          'makanan' => 'Makanan',
          'minuman' => 'Minuman',
          'about' => 'About',
          'contact' => 'Kontak'
        ];

        foreach ($menu_items as $page => $label) {
          $active_class = ($current_page === $page) ? 'active' : '';
          echo "<a href='?page={$page}' class='nav-link {$active_class}'>{$label}</a>";
        }
        ?>
      </div>
    </div>
    <button class="mobile-menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="4" y1="12" x2="20" y2="12"></line>
        <line x1="4" y1="6" x2="20" y2="6"></line>
        <line x1="4" y1="18" x2="20" y2="18"></line>
      </svg>
    </button>
  </div>
</nav>