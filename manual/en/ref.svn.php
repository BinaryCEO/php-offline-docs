<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SVN Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.svn.php">
 <link rel="shorturl" href="https://www.php.net/svn">
 <link rel="alternate" href="https://www.php.net/svn" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.svn.php">
 <link rel="prev" href="https://www.php.net/manual/en/svn.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.svn-add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.svn.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.svn.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.svn.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.svn.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.svn.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.svn.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.svn.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.svn.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.svn.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.svn.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.svn.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SVN Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SVN Functions - Manual" />
<meta name="twitter:description" content="SVN Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SVN Functions - Manual" />
<meta itemprop="description" content="SVN Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SVN Functions" />

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
        <a href="function.svn-add.php">
          svn_add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="svn.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.svn.php'>SVN</a></li>      </ul>
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
            <option value='en/ref.svn.php' selected="selected">English</option>
            <option value='de/ref.svn.php'>German</option>
            <option value='es/ref.svn.php'>Spanish</option>
            <option value='fr/ref.svn.php'>French</option>
            <option value='it/ref.svn.php'>Italian</option>
            <option value='ja/ref.svn.php'>Japanese</option>
            <option value='pt_BR/ref.svn.php'>Brazilian Portuguese</option>
            <option value='ru/ref.svn.php'>Russian</option>
            <option value='tr/ref.svn.php'>Turkish</option>
            <option value='uk/ref.svn.php'>Ukrainian</option>
            <option value='zh/ref.svn.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.svn" class="reference">
 <h1 class="title">SVN Functions</h1>

 




































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.svn-add.php">svn_add</a> — Schedules the addition of an item in a working directory</li><li><a href="function.svn-auth-get-parameter.php">svn_auth_get_parameter</a> — Retrieves authentication parameter</li><li><a href="function.svn-auth-set-parameter.php">svn_auth_set_parameter</a> — Sets an authentication parameter</li><li><a href="function.svn-blame.php">svn_blame</a> — Get the SVN blame for a file</li><li><a href="function.svn-cat.php">svn_cat</a> — Returns the contents of a file in a repository</li><li><a href="function.svn-checkout.php">svn_checkout</a> — Checks out a working copy from the repository</li><li><a href="function.svn-cleanup.php">svn_cleanup</a> — Recursively cleanup a working copy directory, finishing incomplete operations and removing locks</li><li><a href="function.svn-client-version.php">svn_client_version</a> — Returns the version of the SVN client libraries</li><li><a href="function.svn-commit.php">svn_commit</a> — Sends changes from the local working copy to the repository</li><li><a href="function.svn-delete.php">svn_delete</a> — Delete items from a working copy or repository</li><li><a href="function.svn-diff.php">svn_diff</a> — Recursively diffs two paths</li><li><a href="function.svn-export.php">svn_export</a> — Export the contents of a SVN directory</li><li><a href="function.svn-fs-abort-txn.php">svn_fs_abort_txn</a> — Aborts a transaction</li><li><a href="function.svn-fs-apply-text.php">svn_fs_apply_text</a> — Creates and returns a stream that will be used to replace</li><li><a href="function.svn-fs-begin-txn2.php">svn_fs_begin_txn2</a> — Create a new transaction</li><li><a href="function.svn-fs-change-node-prop.php">svn_fs_change_node_prop</a> — Return true if everything is ok, false otherwise</li><li><a href="function.svn-fs-check-path.php">svn_fs_check_path</a> — Determines what kind of item lives at path in a given repository fsroot</li><li><a href="function.svn-fs-contents-changed.php">svn_fs_contents_changed</a> — Return true if content is different, false otherwise</li><li><a href="function.svn-fs-copy.php">svn_fs_copy</a> — Copies a file or a directory</li><li><a href="function.svn-fs-delete.php">svn_fs_delete</a> — Deletes a file or a directory</li><li><a href="function.svn-fs-dir-entries.php">svn_fs_dir_entries</a> — Enumerates the directory entries under path; returns a hash of dir names to file type</li><li><a href="function.svn-fs-file-contents.php">svn_fs_file_contents</a> — Returns a stream to access the contents of a file from a given version of the fs</li><li><a href="function.svn-fs-file-length.php">svn_fs_file_length</a> — Returns the length of a file from a given version of the fs</li><li><a href="function.svn-fs-is-dir.php">svn_fs_is_dir</a> — Determines if a path points to a directory</li><li><a href="function.svn-fs-is-file.php">svn_fs_is_file</a> — Determines if a path points to a file</li><li><a href="function.svn-fs-make-dir.php">svn_fs_make_dir</a> — Creates a new empty directory</li><li><a href="function.svn-fs-make-file.php">svn_fs_make_file</a> — Creates a new empty file</li><li><a href="function.svn-fs-node-created-rev.php">svn_fs_node_created_rev</a> — Returns the revision in which path under fsroot was created</li><li><a href="function.svn-fs-node-prop.php">svn_fs_node_prop</a> — Returns the value of a property for a node</li><li><a href="function.svn-fs-props-changed.php">svn_fs_props_changed</a> — Return true if props are different, false otherwise</li><li><a href="function.svn-fs-revision-prop.php">svn_fs_revision_prop</a> — Fetches the value of a named property</li><li><a href="function.svn-fs-revision-root.php">svn_fs_revision_root</a> — Get a handle on a specific version of the repository root</li><li><a href="function.svn-fs-txn-root.php">svn_fs_txn_root</a> — Creates and returns a transaction root</li><li><a href="function.svn-fs-youngest-rev.php">svn_fs_youngest_rev</a> — Returns the number of the youngest revision in the filesystem</li><li><a href="function.svn-import.php">svn_import</a> — Imports an unversioned path into a repository</li><li><a href="function.svn-log.php">svn_log</a> — Returns the commit log messages of a repository URL</li><li><a href="function.svn-ls.php">svn_ls</a> — Returns list of directory contents in repository URL, optionally at revision number</li><li><a href="function.svn-mkdir.php">svn_mkdir</a> — Creates a directory in a working copy or repository</li><li><a href="function.svn-repos-create.php">svn_repos_create</a> — Create a new subversion repository at path</li><li><a href="function.svn-repos-fs.php">svn_repos_fs</a> — Gets a handle on the filesystem for a repository</li><li><a href="function.svn-repos-fs-begin-txn-for-commit.php">svn_repos_fs_begin_txn_for_commit</a> — Create a new transaction</li><li><a href="function.svn-repos-fs-commit-txn.php">svn_repos_fs_commit_txn</a> — Commits a transaction and returns the new revision</li><li><a href="function.svn-repos-hotcopy.php">svn_repos_hotcopy</a> — Make a hot-copy of the repos at repospath; copy it to destpath</li><li><a href="function.svn-repos-open.php">svn_repos_open</a> — Open a shared lock on a repository</li><li><a href="function.svn-repos-recover.php">svn_repos_recover</a> — Run recovery procedures on the repository located at path</li><li><a href="function.svn-revert.php">svn_revert</a> — Revert changes to the working copy</li><li><a href="function.svn-status.php">svn_status</a> — Returns the status of working copy files and directories</li><li><a href="function.svn-update.php">svn_update</a> — Update working copy</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/svn/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.svn%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.svn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.svn.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110991">  <div class="votes">
    <div id="Vu110991">
    <a href="/manual/vote-note.php?id=110991&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110991">
    <a href="/manual/vote-note.php?id=110991&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110991" title="60% like this...">
    2
    </div>
  </div>
  <a href="#110991" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#110991"> &para;</a><div class="date" title="2013-01-03 03:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110991">
<div class="phpcode"><code><span class="html">This extension also gives you access to an object API that is currently not documented anywhere. It uses the Svn, SvnWc, SvnWcSchedule and SvnNode classes. So you can't redeclare those names.<br /><br />Here are some basics on how to use it:<br /><br /><span class="default">&lt;?php<br />$svn </span><span class="keyword">= new </span><span class="default">Svn</span><span class="keyword">;<br /></span><span class="default">$log </span><span class="keyword">= </span><span class="default">$svn</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="string">'<a href="https://svn.example/trunk/" rel="nofollow" target="_blank">https://svn.example/trunk/</a>'</span><span class="keyword">, </span><span class="default">Svn</span><span class="keyword">::</span><span class="default">HEAD</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Basically you can use all functions documented here by replacing the svn_ prefix with $svn-&gt; object. Same for constants, most can be used directly from the objects.<br /><br />If you're interested, make sure to check the extension source code to find out more.</span></code></div>
  </div>
 </div>
  <div class="note" id="111052">  <div class="votes">
    <div id="Vu111052">
    <a href="/manual/vote-note.php?id=111052&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111052">
    <a href="/manual/vote-note.php?id=111052&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111052" title="55% like this...">
    1
    </div>
  </div>
  <a href="#111052" class="name">
  <strong class="user"><em>j dot saterfiel at gmail dot com</em></strong></a><a class="genanchor" href="#111052"> &para;</a><div class="date" title="2013-01-10 12:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111052">
<div class="phpcode"><code><span class="html">The PHP SVN library functions as of 1.02 that are not listed in this documentation and their signatures<br /><br />array svn_info(string path [, bool recurse = true [, int revision = -1]])<br /><br />resource svn_copy(string log, string src_path, string destination_path [, bool working_copy = true [, int revision = -1]])<br /><br />mixed svn_move(string src_path, string dst_path [, bool force = false])<br /><br />mixed svn_proplist(string path [, bool recurse = false, [int revision]])<br /><br />mixed svn_propget(string path, string property_name [, bool recurse = false [, int revision]])<br /><br />bool svn_lock(string comment, mixed targets [, bool steal_lock = false])<br /><br />bool svn_unlock(mixed targets [, bool break_lock= false])<br /><br />resource svn_switch(string path, string url [, bool working_copy = true])<br /><br />You can also use the new Svn() object for these $svn-&gt;lock()<br /><br />In general any function should work just like the svn command line version.  For instance svn_info can be used against a remote url or a local path and svn_copy can also be used for local or remote operations.</span></code></div>
  </div>
 </div>
  <div class="note" id="78222">  <div class="votes">
    <div id="Vu78222">
    <a href="/manual/vote-note.php?id=78222&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78222">
    <a href="/manual/vote-note.php?id=78222&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78222" title="100% like this...">
    1
    </div>
  </div>
  <a href="#78222" class="name">
  <strong class="user"><em>pierre dot beaumadier at rhapso dot fr</em></strong></a><a class="genanchor" href="#78222"> &para;</a><div class="date" title="2007-10-03 06:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78222">
<div class="phpcode"><code><span class="html">[Editorial note: These constants are defined by the Subversion library itself and may change without notice (although things tend to be quite stable).]
<br />
<br />For information, here are the numeric values I got for the constants :
<br />
<br />Working copy status constants : 
<br />    * svn_wc_status_none =&gt; 1
<br />    * svn_wc_status_unversioned =&gt; 2
<br />    * svn_wc_status_normal =&gt; 3
<br />    * svn_wc_status_added =&gt; 4
<br />    * svn_wc_status_missing =&gt; 5
<br />    * svn_wc_status_deleted =&gt; 6
<br />    * svn_wc_status_replaced =&gt; 7
<br />    * svn_wc_status_modified =&gt; 8
<br />    * svn_wc_status_merged =&gt; 9
<br />    * svn_wc_status_conflicted =&gt; 10
<br />    * svn_wc_status_ignored =&gt; 11
<br />    * svn_wc_status_obstructed =&gt; 12
<br />    * svn_wc_status_external =&gt; 13
<br />    * svn_wc_status_incomplete =&gt; 14
<br />
<br />Node type constants :
<br />    * svn_node_none =&gt; 0
<br />    * svn_node_file =&gt; 1
<br />    * svn_node_dir =&gt; 2
<br />    * svn_node_unknown =&gt; 3</span></code></div>
  </div>
 </div>
  <div class="note" id="97064">  <div class="votes">
    <div id="Vu97064">
    <a href="/manual/vote-note.php?id=97064&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97064">
    <a href="/manual/vote-note.php?id=97064&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97064" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97064" class="name">
  <strong class="user"><em>chris dot lawrence at ljg dot com</em></strong></a><a class="genanchor" href="#97064"> &para;</a><div class="date" title="2010-03-30 02:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97064">
<div class="phpcode"><code><span class="html">I also submitted this as a bug (since its about missing documentation).<br /><br />This documentation does not mention the "svn_delete" command, but it was added in version 0.4.  You can check the release notes here:<br /><a href="http://pecl.php.net/package/svn/0.4" rel="nofollow" target="_blank">http://pecl.php.net/package/svn/0.4</a><br /><br />Also, you could look at the contents of the current source code (svn-0.5.1/svn.c).<br /><br />But what you really need to know is that the svn_delete command works correctly with this prototype:<br />svn_delete(string path [, bool force = true])<br /><br />It returns true on success and false on failure.</span></code></div>
  </div>
 </div>
  <div class="note" id="81972">  <div class="votes">
    <div id="Vu81972">
    <a href="/manual/vote-note.php?id=81972&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81972">
    <a href="/manual/vote-note.php?id=81972&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81972" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81972" class="name">
  <strong class="user"><em>Pieter van Ginkel</em></strong></a><a class="genanchor" href="#81972"> &para;</a><div class="date" title="2008-03-21 12:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81972">
<div class="phpcode"><code><span class="html">The Subversion functions work quite well for me, after some searching. I needed some time though to find out how they all worked together, but this is a basic example of svn_fs_is_file:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># Get a handle to the on-disk repository. Note that this<br /># is NOT a checked out project, but the actual svn repository!<br /><br /></span><span class="default">$repos_handle </span><span class="keyword">= </span><span class="default">svn_repos_open</span><span class="keyword">(</span><span class="string">'/var/lib/svn'</span><span class="keyword">);<br /></span><span class="default">$fs_handle </span><span class="keyword">= </span><span class="default">svn_repos_fs</span><span class="keyword">(</span><span class="default">$repos_handle</span><span class="keyword">);<br /><br /></span><span class="comment"># Now we need to open a revision because that's what the<br /># svn_fs_* methods need. You'll probably want the latest<br /># revision and we have a helper method for that.<br /><br /></span><span class="default">$youngest_rev </span><span class="keyword">= </span><span class="default">svn_fs_youngest_rev</span><span class="keyword">(</span><span class="default">$fs_handle</span><span class="keyword">);<br /></span><span class="default">$fs_rev_handle </span><span class="keyword">= </span><span class="default">svn_fs_revision_root</span><span class="keyword">(</span><span class="default">$fs_handle</span><span class="keyword">, </span><span class="default">$youngest_rev</span><span class="keyword">);<br /><br /></span><span class="comment"># Now we can actually start doing stuff, for example the<br /># svn_fs_is_file call:<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">svn_fs_is_file</span><span class="keyword">(</span><span class="default">$fs_rev_handle</span><span class="keyword">, </span><span class="string">'/a-file.txt'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />There is one important thing to note about this all. You cannot let the handles expire while doing any calls to svn_fs_*. When implementing a helper class, I cached the first and third handle, but not the second one. PHP crashes hard when you do this. Keep references to all handles you get while you're calling the svn_fs_* methods.</span></code></div>
  </div>
 </div>
  <div class="note" id="81915">  <div class="votes">
    <div id="Vu81915">
    <a href="/manual/vote-note.php?id=81915&amp;page=ref.svn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81915">
    <a href="/manual/vote-note.php?id=81915&amp;page=ref.svn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81915" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81915" class="name">
  <strong class="user"><em>tbrendstrup</em></strong></a><a class="genanchor" href="#81915"> &para;</a><div class="date" title="2008-03-19 01:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81915">
<div class="phpcode"><code><span class="html">"[Editorial note: These constants are defined by the Subversion library itself and may change without notice (although things tend to be quite stable).]"<br /><br />The subversion developers have a policy not to change stuff like this without changing the major version number, so these should be valid at least until subversion 2.0.0 is released. (more values might be added, but the existing ones won't change).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.svn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.svn.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.svn.php">SVN</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.svn.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="svn.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="svn.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.svn.php" title="SVN Functions">SVN Functions</a>
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
