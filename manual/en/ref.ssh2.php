<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SSH2 Functions - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="shorturl" href="https://www.php.net/ssh2">
 <link rel="alternate" href="https://www.php.net/ssh2" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/ssh2.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-auth-agent.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.ssh2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.ssh2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.ssh2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.ssh2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.ssh2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.ssh2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.ssh2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.ssh2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.ssh2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.ssh2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.ssh2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SSH2 Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SSH2 Functions - Manual" />
<meta name="twitter:description" content="SSH2 Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SSH2 Functions - Manual" />
<meta itemprop="description" content="SSH2 Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SSH2 Functions" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="function.ssh2-auth-agent.php">
          ssh2_auth_agent &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ssh2.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ssh2.php'>SSH2</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/ref.ssh2.php' selected="selected">English</option>
            <option value='de/ref.ssh2.php'>German</option>
            <option value='es/ref.ssh2.php'>Spanish</option>
            <option value='fr/ref.ssh2.php'>French</option>
            <option value='it/ref.ssh2.php'>Italian</option>
            <option value='ja/ref.ssh2.php'>Japanese</option>
            <option value='pt_BR/ref.ssh2.php'>Brazilian Portuguese</option>
            <option value='ru/ref.ssh2.php'>Russian</option>
            <option value='tr/ref.ssh2.php'>Turkish</option>
            <option value='uk/ref.ssh2.php'>Ukrainian</option>
            <option value='zh/ref.ssh2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.ssh2" class="reference">
 <h1 class="title">SSH2 Functions</h1>

 

















































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.ssh2-auth-agent.php">ssh2_auth_agent</a> — Authenticate over SSH using the ssh agent</li><li><a href="function.ssh2-auth-hostbased-file.php">ssh2_auth_hostbased_file</a> — Authenticate using a public hostkey</li><li><a href="function.ssh2-auth-none.php">ssh2_auth_none</a> — Authenticate as &quot;none&quot;</li><li><a href="function.ssh2-auth-password.php">ssh2_auth_password</a> — Authenticate over SSH using a plain password</li><li><a href="function.ssh2-auth-pubkey-file.php">ssh2_auth_pubkey_file</a> — Authenticate using a public key</li><li><a href="function.ssh2-connect.php">ssh2_connect</a> — Connect to an SSH server</li><li><a href="function.ssh2-disconnect.php">ssh2_disconnect</a> — Close a connection to a remote SSH server</li><li><a href="function.ssh2-exec.php">ssh2_exec</a> — Execute a command on a remote server</li><li><a href="function.ssh2-fetch-stream.php">ssh2_fetch_stream</a> — Fetch an extended data stream</li><li><a href="function.ssh2-fingerprint.php">ssh2_fingerprint</a> — Retrieve fingerprint of remote server</li><li><a href="function.ssh2-forward-accept.php">ssh2_forward_accept</a> — Accept a connection created by a listener</li><li><a href="function.ssh2-forward-listen.php">ssh2_forward_listen</a> — Bind a port on the remote server and listen for connections</li><li><a href="function.ssh2-methods-negotiated.php">ssh2_methods_negotiated</a> — Return list of negotiated methods</li><li><a href="function.ssh2-poll.php">ssh2_poll</a> — Poll the channels/listeners/streams for events</li><li><a href="function.ssh2-publickey-add.php">ssh2_publickey_add</a> — Add an authorized publickey</li><li><a href="function.ssh2-publickey-init.php">ssh2_publickey_init</a> — Initialize Publickey subsystem</li><li><a href="function.ssh2-publickey-list.php">ssh2_publickey_list</a> — List currently authorized publickeys</li><li><a href="function.ssh2-publickey-remove.php">ssh2_publickey_remove</a> — Remove an authorized publickey</li><li><a href="function.ssh2-scp-recv.php">ssh2_scp_recv</a> — Request a file via SCP</li><li><a href="function.ssh2-scp-send.php">ssh2_scp_send</a> — Send a file via SCP</li><li><a href="function.ssh2-send-eof.php">ssh2_send_eof</a> — Send EOF to stream</li><li><a href="function.ssh2-sftp.php">ssh2_sftp</a> — Initialize SFTP subsystem</li><li><a href="function.ssh2-sftp-chmod.php">ssh2_sftp_chmod</a> — Changes file mode</li><li><a href="function.ssh2-sftp-lstat.php">ssh2_sftp_lstat</a> — Stat a symbolic link</li><li><a href="function.ssh2-sftp-mkdir.php">ssh2_sftp_mkdir</a> — Create a directory</li><li><a href="function.ssh2-sftp-readlink.php">ssh2_sftp_readlink</a> — Return the target of a symbolic link</li><li><a href="function.ssh2-sftp-realpath.php">ssh2_sftp_realpath</a> — Resolve the realpath of a provided path string</li><li><a href="function.ssh2-sftp-rename.php">ssh2_sftp_rename</a> — Rename a remote file</li><li><a href="function.ssh2-sftp-rmdir.php">ssh2_sftp_rmdir</a> — Remove a directory</li><li><a href="function.ssh2-sftp-stat.php">ssh2_sftp_stat</a> — Stat a file on a remote filesystem</li><li><a href="function.ssh2-sftp-symlink.php">ssh2_sftp_symlink</a> — Create a symlink</li><li><a href="function.ssh2-sftp-unlink.php">ssh2_sftp_unlink</a> — Delete a file</li><li><a href="function.ssh2-shell.php">ssh2_shell</a> — Request an interactive shell</li><li><a href="function.ssh2-tunnel.php">ssh2_tunnel</a> — Open a tunnel through a remote server</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.ssh2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.ssh2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ssh2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="78756">  <div class="votes">
    <div id="Vu78756">
    <a href="/manual/vote-note.php?id=78756&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78756">
    <a href="/manual/vote-note.php?id=78756&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78756" title="76% like this...">
    9
    </div>
  </div>
  <a href="#78756" class="name">
  <strong class="user"><em>dan at novapulsar dot com</em></strong></a><a class="genanchor" href="#78756"> &para;</a><div class="date" title="2007-10-25 11:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78756">
<div class="phpcode"><code><span class="html">you will have an issue transferring any file using ssh2_scp_send unless you send a dummy file after your real file, or preferably issue an <br /><br />ssh2_exec ($connection, 'exit'); <br /><br />I was transferring hundreds of thousands of files in my prototype across multiple servers, and noticed that each file had a mismatched md5 hash and bytelength.<br /><br />after a bit of research i learnt that this was a bug, and added the code above as suggested at pecl.php.net in the bugs section.<br /><br />hopefully this helps someone who is getting partial file transfer that could ruin your whole app.</span></code></div>
  </div>
 </div>
  <div class="note" id="69324">  <div class="votes">
    <div id="Vu69324">
    <a href="/manual/vote-note.php?id=69324&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69324">
    <a href="/manual/vote-note.php?id=69324&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69324" title="100% like this...">
    3
    </div>
  </div>
  <a href="#69324" class="name">
  <strong class="user"><em>astribuncio at gmail dot com</em></strong></a><a class="genanchor" href="#69324"> &para;</a><div class="date" title="2006-08-31 10:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69324">
<div class="phpcode"><code><span class="html">Installing on HPUX 11.11 cookbook<br /><br />Just follow the install instructions on the man page and solved the problems as they appear<br /><br />- when making libssh2<br />Problem related with /lib/pa20_64 and 64 bits library in 32 bits link<br />Edited the configure file  and changed<br />SHLIB_LDFLAGS="-b +vnocompatwarnings -L/lib/pa20_64"<br />to<br />SHLIB_LDFLAGS="-b +vnocompatwarnings -L/lib"<br /><br />-when executing phpize<br />Problems with aclocal, autom4ke and m4<br />Installed automake, autoconf and m4<br /><br />-when ./configuring the ssh2 <br />Configure: error: libssh2 version &gt;= 0.4 not found<br />Edited the configure.m4 and removed the -ldl switch from line (as posted before)<br />39      -L$SSH2_DIR/lib -lm -ldl<br />runned phpize again and ./configure --with-ssh2</span></code></div>
  </div>
 </div>
  <div class="note" id="121929">  <div class="votes">
    <div id="Vu121929">
    <a href="/manual/vote-note.php?id=121929&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121929">
    <a href="/manual/vote-note.php?id=121929&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121929" title="80% like this...">
    3
    </div>
  </div>
  <a href="#121929" class="name">
  <strong class="user"><em>shred</em></strong></a><a class="genanchor" href="#121929"> &para;</a><div class="date" title="2017-11-28 12:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121929">
<div class="phpcode"><code><span class="html">Getting strange "Unable to open ssh2.s<a href="ftp://Resource" rel="nofollow" target="_blank">ftp://Resource</a> id #3/example.txt" errors? This is a bug in PHP &gt; 5.6.27. Use intval() as a workaround to make ssh2 work again:<br /><br />$sftp = ssh2_sftp($connection);<br />fopen("ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>" . intval($sftp) . "/example.txt", 'r');<br /><br /><a href="https://bugs.php.net/bug.php?id=73597" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=73597</a></span></code></div>
  </div>
 </div>
  <div class="note" id="68806">  <div class="votes">
    <div id="Vu68806">
    <a href="/manual/vote-note.php?id=68806&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68806">
    <a href="/manual/vote-note.php?id=68806&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68806" title="62% like this...">
    2
    </div>
  </div>
  <a href="#68806" class="name">
  <strong class="user"><em>chris dot britton at cingular dot com</em></strong></a><a class="genanchor" href="#68806"> &para;</a><div class="date" title="2006-08-11 06:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68806">
<div class="phpcode"><code><span class="html">I was building out the ssh2 extension (0.10) under OpenBSD 3.9 on sparc64 and I got this error when running configure:<br /><br />checking for libssh2_banner_set in -lssh2... no<br />configure: error: libssh2 version &gt;= 0.4 not found<br /><br />I did some poking around in the configure file and traced the problem down.  The reason for the failure is that configure is trying to compile a test program with -ldl.  libdl is not installed on OpenBSD 3.9. The OpenBSD folks purged libdl years ago and I could not find a package that contains it. <br /><br />(The error message above is misleading because the problem is not with libssh2.)<br /><br />I looked at the ssh2 extension code and could not see a reason for using libdl, so I removed the -ldl from the config.m4 file.  Re-ran phpize and configure. No errors.  Did make and installed ssh2.so.  Works fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="63641">  <div class="votes">
    <div id="Vu63641">
    <a href="/manual/vote-note.php?id=63641&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63641">
    <a href="/manual/vote-note.php?id=63641&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63641" title="57% like this...">
    2
    </div>
  </div>
  <a href="#63641" class="name">
  <strong class="user"><em>Mike &lt;esnik8202 at sneakemail dot com&gt;</em></strong></a><a class="genanchor" href="#63641"> &para;</a><div class="date" title="2006-03-26 09:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63641">
<div class="phpcode"><code><span class="html">To list directory contents:
<br />
<br /><span class="default">&lt;?php
<br />$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(\</span><span class="string">"hostname\", 22);
<br />ssh2_auth_password(</span><span class="default">$connection</span><span class="string">,\"username\", \"password\");  // or use any of the ssh2_auth_* methods
<br /></span><span class="default">$sftp</span><span class="string"> = ssh2_sftp(</span><span class="default">$connection</span><span class="string">);
<br />
<br /></span><span class="default">$dh</span><span class="string"> = opendir(\"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a></span><span class="default">$sftp</span><span class="string">/path/to/dir/\");
<br />
<br />while ((</span><span class="default">$file</span><span class="string"> = readdir(</span><span class="default">$dh</span><span class="string">)) !== false) {
<br />  echo \"</span><span class="default">$file</span><span class="string"> is in hostname:/path/to/dir\\n\";
<br />}
<br />
<br />closedir(</span><span class="default">$dh</span><span class="string">);
<br />?&gt;
<br />
<br />(thanks to Sara for assisting)</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57461">  <div class="votes">
    <div id="Vu57461">
    <a href="/manual/vote-note.php?id=57461&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57461">
    <a href="/manual/vote-note.php?id=57461&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57461" title="60% like this...">
    1
    </div>
  </div>
  <a href="#57461" class="name">
  <strong class="user"><em>dotwho at NSPM dot mac dot com</em></strong></a><a class="genanchor" href="#57461"> &para;</a><div class="date" title="2005-10-04 03:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57461">
<div class="phpcode"><code><span class="html">Trying to compile this ssh PECL extension for Mac OS X (10.4.2) <br />with entropy.ch's php5 distribution? Read on: PART 1:<br />1) Download libssh (I used version 0.11)<br /><a href="http://sourceforge.net/project/showfiles.php?group_id=125852" rel="nofollow" target="_blank">http://sourceforge.net/project/showfiles.php?group_id=125852</a><br />2) Unzip the directory and cd to the upacked directory in the terminal.<br />3) run: ./configure; make all install;<br />libssh should compile and place the output file in src/*.o<br />4) copy all headers from the include folder within the libssh2 directory to<br />/usr/local/include/<br />5) copy all compiled files (*.o) from the src folder within the libssh2 <br />directory to /usr/local/lib/<br />6) Download ssh2 <br />(I used version 0.9 with additional changes from cvs - explained below)<br /><a href="http://pecl.php.net/package/ssh2" rel="nofollow" target="_blank">http://pecl.php.net/package/ssh2</a><br />7) unzip the downloaded archive.<br />8) version 0.9 has a conflict with an existing symbol used in some of the ZEND headers... <br />a change is available in cvs which renames the symbol in ssh2 to avoid the conflict<br /><a href="http://cvs.php.net/diff.php/pecl/ssh2/ssh2.c?r1=1.9&amp;r2=1.10&amp;ty=h" rel="nofollow" target="_blank">http://cvs.php.net/diff.php/pecl/ssh2/ssh2.c?r1=1.9&amp;r2=1.10&amp;ty=h</a><br />down load at least the 1.10 version of ssh2.c<br />if you decide to download a newer version, download any of the corresponding related files, <br />such as the php_ssh2.h header file.<br />9) replace the old version of ssh2.c with the new version of ssh2.c <br />(and any other files you downloaded).<br />10) From the terminal: <br />cd to the source directory (for me ssh2-0.9/ssh2-0.9/).<br /><br />(Continued in a PART 2 comment)</span></code></div>
  </div>
 </div>
  <div class="note" id="77170">  <div class="votes">
    <div id="Vu77170">
    <a href="/manual/vote-note.php?id=77170&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77170">
    <a href="/manual/vote-note.php?id=77170&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77170" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77170" class="name">
  <strong class="user"><em>aeolianmeson at blitzeclipse dot com</em></strong></a><a class="genanchor" href="#77170"> &para;</a><div class="date" title="2007-08-17 12:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77170">
<div class="phpcode"><code><span class="html">Some installations of PHP 5 may have a problem starting the SSH2 extension as a Windows' service. It just started happening to me today, spontaneously. I have PHP 5.2.2 (and have tried 5.2.3), on Apache 2.0.59 .<br /><br />It turns out that it's an Apache problem. Even though I was given an error message when starting it, it still worked perfectly from the CLI. So, I commented it out in the<br />INI file again, and am just loading it using extension_loaded('ssh2') and dl('php_ssh2.dll') from within the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="57462">  <div class="votes">
    <div id="Vu57462">
    <a href="/manual/vote-note.php?id=57462&amp;page=ref.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57462">
    <a href="/manual/vote-note.php?id=57462&amp;page=ref.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57462" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57462" class="name">
  <strong class="user"><em>dotwho at NSPM dot mac dot com</em></strong></a><a class="genanchor" href="#57462"> &para;</a><div class="date" title="2005-10-04 03:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57462">
<div class="phpcode"><code><span class="html">Trying to compile this ssh PECL extension for Mac OS X (10.4.2) <br />with entropy.ch's php5 distribution? Read on: PART 2:<br /><br />11) Check your shell's path variable by SHELL$ "echo $PATH". <br />If your php5 binary directory is not listed before the standard OS X binary directory, <br />update your $PATH variable to list it first. Mine reads: <br />/usr/local/mysql/bin/: /usr/local/php5/bin/: /bin:/sbin: /usr/bin:/usr/sbin <br />11a) if you do not do this step, the PECL extension will link against the old <br />php4 version that ships with Mac OS X. You will know this by the fact that the <br />next step lists a server API that is different than the output of phpinfo(): <br />My version was 20041030, Apples version was 20020429.<br />12) Run: phpize &amp;&amp; ./configure --with-ssh2 &amp;&amp; make<br />This will produce a lot of output and probably some warnings. If you get a note <br />at the end that says "Build Complete", then the process has completed <br />(probably successfully). The command has produced the output file ssh2.so within <br />the ssh2-0.9 (or whatever version) directory.<br />13) Check where the extension directory is located at by running the following command:<br />SHELL$/usr/local/php5/bin/php-config --extension-dir<br />If it lists some directory that actually exists, copy the ssh2.so file to this directory.<br />If it doesn't list a location that exists, you can either create the location, or <br />choose a different location and update the line in your php.ini file:<br />extension_dir = "./"<br />to point to the directory you would like to use. I chose:<br />extension_dir = "/usr/local/php5/extensions/"?&gt;<br />14) Add the line<br />extension=ssh2.so<br />to the Dynamic Extensions area of your php.ini file.<br />15) Restart your web server for the extensioin to be loaded. If there are any problems, they will be written to the webserver log.<br />16) Check if your new ssh based streams are available by running:<br />SHELL$ /usr/local/php5/bin/php -r "print_r(stream_get_wrappers());"<br />You should get something similar to this output:<br />Array<br />(<br />    [0] =&gt; php<br />    [1] =&gt; file<br />    [2] =&gt; http<br />    [3] =&gt; ftp<br />    [4] =&gt; compress.bzip2<br />    [5] =&gt; compress.zlib<br />    [6] =&gt; https<br />    [7] =&gt; ftps<br />    [8] =&gt; ssh2.shell<br />    [9] =&gt; ssh2.exec<br />    [10] =&gt; ssh2.tunnel<br />    [11] =&gt; ssh2.scp<br />    [12] =&gt; ssh2.sftp<br />)<br />You should now be able to do all the cool things you need to do with ssh <br />(like sftp scp ssh execution)! Take a look at some of the comment here for some <br />example scripts to test things out:<br /><a href="http://us2.php.net/manual/en/ref.ssh2.php" rel="nofollow" target="_blank">http://us2.php.net/manual/en/ref.ssh2.php</a><br /><br />Good luck... hope that saves you my headache! :)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.ssh2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ssh2.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ssh2.php">SSH2</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ssh2.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ssh2.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ssh2.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.ssh2.php" title="SSH2 Functions">SSH2 Functions</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
