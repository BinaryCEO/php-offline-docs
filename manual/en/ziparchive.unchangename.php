<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::unchangeName - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.unchangename.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.unchangename.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.unchangename.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.unchangeindex.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.zip.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.unchangename.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.unchangename.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.unchangename.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.unchangename.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.unchangename.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.unchangename.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.unchangename.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.unchangename.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.unchangename.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.unchangename.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.unchangename.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Revert all changes done to an entry with the given name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::unchangeName - Manual" />
<meta name="twitter:description" content="Revert all changes done to an entry with the given name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::unchangeName - Manual" />
<meta itemprop="description" content="Revert all changes done to an entry with the given name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Revert all changes done to an entry with the given name" />

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
        <a href="ref.zip.php">
          Zip Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.unchangeindex.php">
          &laquo; ZipArchive::unchangeIndex        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      <li><a href='class.ziparchive.php'>ZipArchive</a></li>      </ul>
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
            <option value='en/ziparchive.unchangename.php' selected="selected">English</option>
            <option value='de/ziparchive.unchangename.php'>German</option>
            <option value='es/ziparchive.unchangename.php'>Spanish</option>
            <option value='fr/ziparchive.unchangename.php'>French</option>
            <option value='it/ziparchive.unchangename.php'>Italian</option>
            <option value='ja/ziparchive.unchangename.php'>Japanese</option>
            <option value='pt_BR/ziparchive.unchangename.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.unchangename.php'>Russian</option>
            <option value='tr/ziparchive.unchangename.php'>Turkish</option>
            <option value='uk/ziparchive.unchangename.php'>Ukrainian</option>
            <option value='zh/ziparchive.unchangename.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.unchangename" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::unchangeName</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.5.0)</p><p class="refpurpose"><span class="refname">ZipArchive::unchangeName</span> &mdash; <span class="dc-title">Revert all changes done to an entry with the given name</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-ziparchive.unchangename-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::unchangeName</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Revert all changes done to an entry.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-ziparchive.unchangename-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       Name of the entry.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-ziparchive.unchangename-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/unchangename.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.unchangename%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.unchangename&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.unchangename.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.ziparchive.php">ZipArchive</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ziparchive.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfile.php" title="addFile">addFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfromstring.php" title="addFromString">addFromString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addglob.php" title="addGlob">addGlob</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addpattern.php" title="addPattern">addPattern</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.clearerror.php" title="clearError">clearError</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deleteindex.php" title="deleteIndex">deleteIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deletename.php" title="deleteName">deleteName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.extractto.php" title="extractTo">extractTo</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchivecomment.php" title="getArchiveComment">getArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchiveflag.php" title="getArchiveFlag">getArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentindex.php" title="getCommentIndex">getCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentname.php" title="getCommentName">getCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesindex.php" title="getExternalAttributesIndex">getExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesname.php" title="getExternalAttributesName">getExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromindex.php" title="getFromIndex">getFromIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromname.php" title="getFromName">getFromName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getnameindex.php" title="getNameIndex">getNameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstatusstring.php" title="getStatusString">getStatusString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstream.php" title="getStream">getStream</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamindex.php" title="getStreamIndex">getStreamIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamname.php" title="getStreamName">getStreamName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.iscompressionmethoddupported.php" title="isCompressionMethodSupported">isCompressionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.isencryptionmethoddupported.php" title="isEncryptionMethodSupported">isEncryptionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.locatename.php" title="locateName">locateName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registercancelcallback.php" title="registerCancelCallback">registerCancelCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registerprogresscallback.php" title="registerProgressCallback">registerProgressCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renameindex.php" title="renameIndex">renameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renamename.php" title="renameName">renameName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.replacefile.php" title="replaceFile">replaceFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchivecomment.php" title="setArchiveComment">setArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchiveflag.php" title="setArchiveFlag">setArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentindex.php" title="setCommentIndex">setCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentname.php" title="setCommentName">setCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionindex.php" title="setCompressionIndex">setCompressionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionname.php" title="setCompressionName">setCompressionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionindex.php" title="setEncryptionIndex">setEncryptionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionname.php" title="setEncryptionName">setEncryptionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesindex.php" title="setExternalAttributesIndex">setExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesname.php" title="setExternalAttributesName">setExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimeindex.php" title="setMtimeIndex">setMtimeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimename.php" title="setMtimeName">setMtimeName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setpassword.php" title="setPassword">setPassword</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statindex.php" title="statIndex">statIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statname.php" title="statName">statName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeall.php" title="unchangeAll">unchangeAll</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangearchive.php" title="unchangeArchive">unchangeArchive</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeindex.php" title="unchangeIndex">unchangeIndex</a>
                        </li>
                                                <li class="current">
                            <a href="ziparchive.unchangename.php" title="unchangeName">unchangeName</a>
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
