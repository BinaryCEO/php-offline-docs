<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gnupg_init - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gnupg-init.php">
 <link rel="shorturl" href="https://www.php.net/gnupg-init">
 <link rel="alternate" href="https://www.php.net/gnupg-init" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.gnupg.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gnupg-import.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gnupg-keyinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gnupg-init.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gnupg-init.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gnupg-init.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gnupg-init.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gnupg-init.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gnupg-init.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gnupg-init.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gnupg-init.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gnupg-init.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gnupg-init.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gnupg-init.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initialize a connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gnupg_init - Manual" />
<meta name="twitter:description" content="Initialize a connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gnupg_init - Manual" />
<meta itemprop="description" content="Initialize a connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initialize a connection" />

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
        <a href="function.gnupg-keyinfo.php">
          gnupg_keyinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gnupg-import.php">
          &laquo; gnupg_import        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.gnupg.php'>GnuPG</a></li>      <li><a href='ref.gnupg.php'>GnuPG Functions</a></li>      </ul>
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
            <option value='en/function.gnupg-init.php' selected="selected">English</option>
            <option value='de/function.gnupg-init.php'>German</option>
            <option value='es/function.gnupg-init.php'>Spanish</option>
            <option value='fr/function.gnupg-init.php'>French</option>
            <option value='it/function.gnupg-init.php'>Italian</option>
            <option value='ja/function.gnupg-init.php'>Japanese</option>
            <option value='pt_BR/function.gnupg-init.php'>Brazilian Portuguese</option>
            <option value='ru/function.gnupg-init.php'>Russian</option>
            <option value='tr/function.gnupg-init.php'>Turkish</option>
            <option value='uk/function.gnupg-init.php'>Ukrainian</option>
            <option value='zh/function.gnupg-init.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gnupg-init" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gnupg_init</h1>
  <p class="verinfo">(PECL gnupg &gt;= 0.4)</p><p class="refpurpose"><span class="refname">gnupg_init</span> &mdash; <span class="dc-title">Initialize a connection</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.gnupg-init-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gnupg_init</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.gnupg-init-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Must be an associative array. It is used to change the default configuration
       of the crypto engine.
       <table class="doctable table">
        <caption><strong>Configuration overrides</strong></caption>
        
         <thead>
          <tr>
           <th>key</th>
           <th>type</th>
           <th>description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>file_name</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            It is the file name of the executable program implementing this protocol
            which is usually path of the <code class="literal">gpg</code> executable.
           </td>
          </tr>

          <tr>
           <td>home_dir</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>
            It is the directory name of the configuration directory. It also overrides
            <code class="literal">GNUPGHOME</code> environment variable that is used for the same
            purpose.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gnupg-init-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A GnuPG <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> connection used by other GnuPG functions.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.gnupg-init-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>PECL gnupg 1.5.0</td>
      <td>The <code class="parameter">options</code> parameter was added.</td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.gnupg-init-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3445">
    <p><strong>Example #1 Procedural <span class="function"><strong>gnupg_init()</strong></span> example with default setting</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$res </span><span style="color: #007700">= </span><span style="color: #0000BB">gnupg_init</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3446">
    <p><strong>Example #2 Procedural <span class="function"><strong>gnupg_init()</strong></span> example with overriden file name and home dir</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$res </span><span style="color: #007700">= </span><span style="color: #0000BB">gnupg_init</span><span style="color: #007700">([</span><span style="color: #DD0000">"file_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/usr/bin/gpg2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"home_dir" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/var/www/.gnupg"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3447">
    <p><strong>Example #3 OO gnupg initializer example with default setting</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$gpg </span><span style="color: #007700">= new </span><span style="color: #0000BB">gnupg</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3448">
    <p><strong>Example #4 OO gnupg initializer example with overriden file name and home dir</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$gpg </span><span style="color: #007700">= new </span><span style="color: #0000BB">gnupg</span><span style="color: #007700">([</span><span style="color: #DD0000">"file_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/usr/bin/gpg2"</span><span style="color: #007700">, </span><span style="color: #DD0000">"home_dir" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/var/www/.gnupg"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gnupg/functions/gnupg-init.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gnupg-init%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gnupg-init&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gnupg-init.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121851">  <div class="votes">
    <div id="Vu121851">
    <a href="/manual/vote-note.php?id=121851&amp;page=function.gnupg-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121851">
    <a href="/manual/vote-note.php?id=121851&amp;page=function.gnupg-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121851" title="81% like this...">
    7
    </div>
  </div>
  <a href="#121851" class="name">
  <strong class="user"><em>der_axel at gmx dot de</em></strong></a><a class="genanchor" href="#121851"> &para;</a><div class="date" title="2017-11-10 08:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121851">
<div class="phpcode"><code><span class="html">Set the correct GNUPG environment, before you call gnupg_init()!<br /><br />The current FPM/FastCGI/Module User must have read - if you import write - permissions on that directory. You won't get an error message, if something is not correct.<br />Without a correct environment, all other gnupg functions will not work as you expected.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Enter your .gnupg environment<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'GNUPGHOME=/var/www/vhosts/yourdomain/.gnupg'</span><span class="keyword">);<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">gnupg_init</span><span class="keyword">();<br /></span><span class="default">gnupg_seterrormode</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">GNUPG_ERROR_WARNING</span><span class="keyword">);<br /></span><span class="default">$info </span><span class="keyword">= </span><span class="default">gnupg_keyinfo</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="string">'your-key-id'</span><span class="keyword">);<br />echo </span><span class="string">"Key - Info&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126790">  <div class="votes">
    <div id="Vu126790">
    <a href="/manual/vote-note.php?id=126790&amp;page=function.gnupg-init&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126790">
    <a href="/manual/vote-note.php?id=126790&amp;page=function.gnupg-init&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126790" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126790" class="name">
  <strong class="user"><em>djmaze</em></strong></a><a class="genanchor" href="#126790"> &para;</a><div class="date" title="2022-01-21 09:46"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126790">
<div class="phpcode"><code><span class="html">Make sure home_dir option is not too many characters or else private keys fail.<br /><br />You will notice that functions take a long time (seconds).<br /><br />Commandline test yield error:<br />&gt; gpg: can't connect to the agent: IPC connect call failed<br /><br />Executing `gpg-agent --daemon --homedir /very/long/path/to/.gnupg` gave the error.<br />&gt; socket name for '/very/long/path/to/.gnupg/S.gpg-agent.extra' is too long<br /><br />So you must check that home_dir + '/S.gpg-agent.extra' is:<br />* &lt; 107 characters on Linux<br />* &lt; 104 on BSD 4.4</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gnupg-init&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gnupg-init.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.gnupg.php">GnuPG Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gnupg-adddecryptkey.php" title="gnupg_&#8203;adddecryptkey">gnupg_&#8203;adddecryptkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-addencryptkey.php" title="gnupg_&#8203;addencryptkey">gnupg_&#8203;addencryptkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-addsignkey.php" title="gnupg_&#8203;addsignkey">gnupg_&#8203;addsignkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-cleardecryptkeys.php" title="gnupg_&#8203;cleardecryptkeys">gnupg_&#8203;cleardecryptkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-clearencryptkeys.php" title="gnupg_&#8203;clearencryptkeys">gnupg_&#8203;clearencryptkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-clearsignkeys.php" title="gnupg_&#8203;clearsignkeys">gnupg_&#8203;clearsignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-decrypt.php" title="gnupg_&#8203;decrypt">gnupg_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-decryptverify.php" title="gnupg_&#8203;decryptverify">gnupg_&#8203;decryptverify</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-deletekey.php" title="gnupg_&#8203;deletekey">gnupg_&#8203;deletekey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-encrypt.php" title="gnupg_&#8203;encrypt">gnupg_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-encryptsign.php" title="gnupg_&#8203;encryptsign">gnupg_&#8203;encryptsign</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-export.php" title="gnupg_&#8203;export">gnupg_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-getengineinfo.php" title="gnupg_&#8203;getengineinfo">gnupg_&#8203;getengineinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-geterror.php" title="gnupg_&#8203;geterror">gnupg_&#8203;geterror</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-geterrorinfo.php" title="gnupg_&#8203;geterrorinfo">gnupg_&#8203;geterrorinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-getprotocol.php" title="gnupg_&#8203;getprotocol">gnupg_&#8203;getprotocol</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-gettrustlist.php" title="gnupg_&#8203;gettrustlist">gnupg_&#8203;gettrustlist</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-import.php" title="gnupg_&#8203;import">gnupg_&#8203;import</a>
                        </li>
                                                <li class="current">
                            <a href="function.gnupg-init.php" title="gnupg_&#8203;init">gnupg_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-keyinfo.php" title="gnupg_&#8203;keyinfo">gnupg_&#8203;keyinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-listsignatures.php" title="gnupg_&#8203;listsignatures">gnupg_&#8203;listsignatures</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-setarmor.php" title="gnupg_&#8203;setarmor">gnupg_&#8203;setarmor</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-seterrormode.php" title="gnupg_&#8203;seterrormode">gnupg_&#8203;seterrormode</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-setsignmode.php" title="gnupg_&#8203;setsignmode">gnupg_&#8203;setsignmode</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-sign.php" title="gnupg_&#8203;sign">gnupg_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-verify.php" title="gnupg_&#8203;verify">gnupg_&#8203;verify</a>
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
