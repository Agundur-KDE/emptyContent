# emptyContent

Blank client template for [BonsaiPress](https://github.com/Agundur-KDE/BonsaiPress2).

Used by `bonsai new` to bootstrap a new client project. Contains the minimum required structure — one page, SASS setup, Bootstrap submodule reference, and deploy config.

## Structure

```
config/
  de/
    site_structure.xml   ← page tree (one root page)
    contenfiles/         ← page content + meta
    page_config/         ← CSS/JS per page
    templates/           ← HTML shell (head, main)
  sass/
    main.scss            ← Bootstrap imports + custom variables
  ecms_config.php        ← FTP, domain, htaccess credentials
static/
  _resources/
    css/main.css         ← compiled SASS output (committed)
    js/                  ← Bootstrap JS, HTMX (local copies)
static_include/          ← files deployed to include/ (not HTTP-reachable)
```

## Usage

```bash
# via BonsaiPress CLI (recommended)
./bonsai new myclient git@github.com:you/myclient.git

# manual
git clone --recurse-submodules https://github.com/Agundur-KDE/emptyContent.git clients/myclient
```

After cloning, edit `config/ecms_config.php` with your FTP credentials and domain.

## Requirements

- [BonsaiPress](https://github.com/Agundur-KDE/BonsaiPress2)
- Docker (for the local dev server and SASS watcher)
- PHP 8.2+

## License

MIT
