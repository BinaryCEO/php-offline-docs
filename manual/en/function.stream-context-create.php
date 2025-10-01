<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stream_context_create - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stream-context-create.php">
 <link rel="shorturl" href="https://www.php.net/stream-context-create">
 <link rel="alternate" href="https://www.php.net/stream-context-create" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-bucket-prepend.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-context-get-default.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stream-context-create.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stream-context-create.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stream-context-create.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stream-context-create.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stream-context-create.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stream-context-create.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stream-context-create.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stream-context-create.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stream-context-create.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stream-context-create.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stream-context-create.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a stream context" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stream_context_create - Manual" />
<meta name="twitter:description" content="Creates a stream context" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stream_context_create - Manual" />
<meta itemprop="description" content="Creates a stream context" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a stream context" />

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
        <a href="function.stream-context-get-default.php">
          stream_context_get_default &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-bucket-prepend.php">
          &laquo; stream_bucket_prepend        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      <li><a href='ref.stream.php'>Stream Functions</a></li>      </ul>
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
            <option value='en/function.stream-context-create.php' selected="selected">English</option>
            <option value='de/function.stream-context-create.php'>German</option>
            <option value='es/function.stream-context-create.php'>Spanish</option>
            <option value='fr/function.stream-context-create.php'>French</option>
            <option value='it/function.stream-context-create.php'>Italian</option>
            <option value='ja/function.stream-context-create.php'>Japanese</option>
            <option value='pt_BR/function.stream-context-create.php'>Brazilian Portuguese</option>
            <option value='ru/function.stream-context-create.php'>Russian</option>
            <option value='tr/function.stream-context-create.php'>Turkish</option>
            <option value='uk/function.stream-context-create.php'>Ukrainian</option>
            <option value='zh/function.stream-context-create.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stream-context-create" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stream_context_create</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stream_context_create</span> &mdash; <span class="dc-title">Creates a stream context</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.stream-context-create-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stream_context_create</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$params</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
   Creates and returns a stream context with any options supplied in
   <code class="parameter">options</code> preset.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.stream-context-create-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Must be an associative array of associative arrays in the format
       <code class="literal">$arr[&#039;wrapper&#039;][&#039;option&#039;] = $value</code>, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. Refer to <a href="context.php" class="link">context options</a> for a list of available wrappers and options.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">params</code></dt>
     <dd>
      <p class="para">
       Must be an associative array in the format
       <code class="literal">$arr[&#039;parameter&#039;] = $value</code>, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
       Refer to <a href="context.params.php" class="link">context parameters</a> for
       a listing of standard stream parameters.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stream-context-create-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A stream context <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stream-context-create-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">options</code> and <code class="parameter">params</code> are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stream-context-create-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-4044">
   <p><strong>Example #1 Using <span class="function"><strong>stream_context_create()</strong></span></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$opts </span><span style="color: #007700">= [<br />  </span><span style="color: #DD0000">'http' </span><span style="color: #007700">=&gt; [<br />    </span><span style="color: #DD0000">'method' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"GET"</span><span style="color: #007700">,<br />    </span><span style="color: #FF8000">// Use CRLF \r\n to separate multiple headers<br />    </span><span style="color: #DD0000">'header' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Accept-language: en\r\n" </span><span style="color: #007700">.<br />                </span><span style="color: #DD0000">"Cookie: foo=bar"</span><span style="color: #007700">,<br />  ]<br />];<br /><br /></span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">(</span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Sends an http request to www.example.com<br />   with additional headers shown above */<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$context</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stream-context-create-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.stream-context-set-option.php" class="function" rel="rdfs-seeAlso">stream_context_set_option()</a> - Sets an option for a stream/wrapper/context</span></li>
   <li>Listing of supported wrappers (<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a>)</li>
   <li>Context options (<a href="context.php" class="xref">Context options and parameters</a>)</li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/functions/stream-context-create.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stream-context-create%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stream-context-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-context-create.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="74795">  <div class="votes">
    <div id="Vu74795">
    <a href="/manual/vote-note.php?id=74795&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74795">
    <a href="/manual/vote-note.php?id=74795&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74795" title="69% like this...">
    105
    </div>
  </div>
  <a href="#74795" class="name">
  <strong class="user"><em>jrubenstein at gmail dot com</em></strong></a><a class="genanchor" href="#74795"> &para;</a><div class="date" title="2007-04-27 09:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74795">
<div class="phpcode"><code><span class="html">Something to keep in mind when creating SSL streams (using <a href="https://" rel="nofollow" target="_blank">https://</a>):<br /><br /><span class="default">&lt;?php<br />$context </span><span class="keyword">= </span><span class="default">context_create_stream</span><span class="keyword">(</span><span class="default">$context_options</span><span class="keyword">)<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="https://url" rel="nofollow" target="_blank">https://url</a>'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />One would think - the proper way to create a stream options array, would be as follows: <br /><br /><span class="default">&lt;?php<br />$context_options </span><span class="keyword">= array (<br />        </span><span class="string">'https' </span><span class="keyword">=&gt; array (<br />            </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">'POST'</span><span class="keyword">,<br />            </span><span class="string">'header'</span><span class="keyword">=&gt; </span><span class="string">"Content-type: application/x-www-form-urlencoded\r\n"<br />                </span><span class="keyword">. </span><span class="string">"Content-Length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">"\r\n"</span><span class="keyword">,<br />            </span><span class="string">'content' </span><span class="keyword">=&gt; </span><span class="default">$data<br />            </span><span class="keyword">)<br />        );<br /></span><span class="default">?&gt;<br /></span><br />THAT IS THE WRONG WAY!!!<br />Take notice to the 3rd line: 'https' =&gt; array (<br /><br />The CORRECT way, is as follows:<br /><br /><span class="default">&lt;?php<br />$context_options </span><span class="keyword">= array (<br />        </span><span class="string">'http' </span><span class="keyword">=&gt; array (<br />            </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">'POST'</span><span class="keyword">,<br />            </span><span class="string">'header'</span><span class="keyword">=&gt; </span><span class="string">"Content-type: application/x-www-form-urlencoded\r\n"<br />                </span><span class="keyword">. </span><span class="string">"Content-Length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">"\r\n"</span><span class="keyword">,<br />            </span><span class="string">'content' </span><span class="keyword">=&gt; </span><span class="default">$data<br />            </span><span class="keyword">)<br />        );<br /></span><span class="default">?&gt;<br /></span><br />Notice, the NEW 3rd line: 'http' =&gt; array (<br /><br />Now - keep this in mind - I spent several hours trying to trouble shoot my issue, when I finally stumbled upon this non-documented issue.<br /><br />The complete code to post to a secure page is as follows:<br /><br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= array (</span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'baz'</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="default">$context_options </span><span class="keyword">= array (<br />        </span><span class="string">'http' </span><span class="keyword">=&gt; array (<br />            </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">'POST'</span><span class="keyword">,<br />            </span><span class="string">'header'</span><span class="keyword">=&gt; </span><span class="string">"Content-type: application/x-www-form-urlencoded\r\n"<br />                </span><span class="keyword">. </span><span class="string">"Content-Length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">"\r\n"</span><span class="keyword">,<br />            </span><span class="string">'content' </span><span class="keyword">=&gt; </span><span class="default">$data<br />            </span><span class="keyword">)<br />        );<br /><br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">context_create_stream</span><span class="keyword">(</span><span class="default">$context_options</span><span class="keyword">)<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="https://url" rel="nofollow" target="_blank">https://url</a>'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99353">  <div class="votes">
    <div id="Vu99353">
    <a href="/manual/vote-note.php?id=99353&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99353">
    <a href="/manual/vote-note.php?id=99353&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99353" title="73% like this...">
    29
    </div>
  </div>
  <a href="#99353" class="name">
  <strong class="user"><em>contact (at) thepointsolution.com</em></strong></a><a class="genanchor" href="#99353"> &para;</a><div class="date" title="2010-08-12 05:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99353">
<div class="phpcode"><code><span class="html">I big NOTE that i hope will help some one. Something that is not mentioned in the documentation, is that when php is compiled --with-curlwrappers,
<br />
<br />So, instead of:
<br />
<br /><span class="default">&lt;?php
<br />$opts </span><span class="keyword">= array(
<br />  </span><span class="string">'http'</span><span class="keyword">=&gt;array(
<br />    </span><span class="string">'method'</span><span class="keyword">=&gt;</span><span class="string">"GET"</span><span class="keyword">,
<br />    </span><span class="string">'header'</span><span class="keyword">=&gt;</span><span class="string">"Accept-language: en\r\n" </span><span class="keyword">.
<br />              </span><span class="string">"Cookie: foo=bar\r\n"
<br />  </span><span class="keyword">)
<br />);
<br />
<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />You would setup the header this way: 
<br />
<br /><span class="default">&lt;?php
<br />$opts </span><span class="keyword">= array(
<br />  </span><span class="string">'http'</span><span class="keyword">=&gt;array(
<br />    </span><span class="string">'method'</span><span class="keyword">=&gt;</span><span class="string">"GET"</span><span class="keyword">,
<br />    </span><span class="string">'header'</span><span class="keyword">=&gt;array(</span><span class="string">"Accept-language: en"</span><span class="keyword">,
<br />                           </span><span class="string">"Cookie: foo=bar"</span><span class="keyword">,
<br />                           </span><span class="string">"Custom-Header: value"</span><span class="keyword">)
<br />  )
<br />);
<br />
<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This will work.</span></code></div>
  </div>
 </div>
  <div class="note" id="59583">  <div class="votes">
    <div id="Vu59583">
    <a href="/manual/vote-note.php?id=59583&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59583">
    <a href="/manual/vote-note.php?id=59583&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59583" title="81% like this...">
    10
    </div>
  </div>
  <a href="#59583" class="name">
  <strong class="user"><em>net_navard at yahoo dot com</em></strong></a><a class="genanchor" href="#59583"> &para;</a><div class="date" title="2005-12-09 10:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59583">
<div class="phpcode"><code><span class="html">Hi,you can create an array of parameters(what it's called a stream context),which can be transmitted each time you read or write a stream through a socket.In the below example:<br /><br />$opts =array('http'=&gt;arra('method'=&gt;"GET",<br />'header'=&gt;"Accept-language:en\r\n"."Cookie: foo=bar\r\n");<br /><br />What you're actually doing is create a set of parameters(the protocol to be used,the request method,additional http headers and a cookie) which will be used each time you open a socket connection to request www.example.com.This saves a lot of time if you want to use these parameters (called a stream context) whenever you include them when making a request to www.example.com,instead of having to specify them over and over again.<br />Using the previous example,say you want to create a stream context,which sends a "Content-Type" http header and utilize it when making a request to www.example.com.Take a look:<br /><br />$opts = array('http'=&gt;array('method'=&gt;"GET",<br />'header'=&gt;"Content-Type: text/xml; charset=utf-8");<br /><br />$context = stream_context_create($opts);<br />$fp = fopen('<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>','r',false,$context);<br />fpassthru($fp);<br />fclose($fp);<br /><br />Now,when you make a request to www.example.com,the above http header will be included within the socket and transmitted to the server.Best of luck for you friends,Hossein</span></code></div>
  </div>
 </div>
  <div class="note" id="111032">  <div class="votes">
    <div id="Vu111032">
    <a href="/manual/vote-note.php?id=111032&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111032">
    <a href="/manual/vote-note.php?id=111032&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111032" title="70% like this...">
    20
    </div>
  </div>
  <a href="#111032" class="name">
  <strong class="user"><em>Ben J</em></strong></a><a class="genanchor" href="#111032"> &para;</a><div class="date" title="2013-01-08 03:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111032">
<div class="phpcode"><code><span class="html">I spent a good five hours trying to figure this out, so hopefully it will save someone else some time.
<br />
<br />When you are trying to download a file via ftp through an HTTP proxy note that the following will not be enough:
<br /><span class="default">&lt;?php
<br />$opts </span><span class="keyword">= array(</span><span class="string">'ftp' </span><span class="keyword">=&gt; array(
<br />    </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="string">'tcp://vbinprst10:8080'</span><span class="keyword">,
<br />    </span><span class="string">'request_fulluri'</span><span class="keyword">=&gt;</span><span class="default">true</span><span class="keyword">,
<br />    </span><span class="string">'header' </span><span class="keyword">=&gt; array(
<br />        </span><span class="string">"Proxy-Authorization: Basic </span><span class="default">$auth</span><span class="string">"
<br />        </span><span class="keyword">)
<br />    )
<br />);
<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);
<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"<a href="ftp://anonymous:anonymous@ftp.example.org" rel="nofollow" target="_blank">ftp://anonymous:anonymous@ftp.example.org</a>"</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$context</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Your proxy will respond that authentication is required. You may scratch your head and think "but I'm providing authentication!"
<br />
<br />The issue is that the 'header' value is only applicable to http connections. So to authenticate on a proxy, you first have to pull a file from HTTP, before the context is valid for using on FTP.
<br /><span class="default">&lt;?php
<br />$opts </span><span class="keyword">= array(</span><span class="string">'ftp' </span><span class="keyword">=&gt; array(
<br />    </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="string">'tcp://vbinprst10:8080'</span><span class="keyword">,
<br />    </span><span class="string">'request_fulluri'</span><span class="keyword">=&gt;</span><span class="default">true</span><span class="keyword">,
<br />    </span><span class="string">'header' </span><span class="keyword">=&gt; array(
<br />        </span><span class="string">"Proxy-Authorization: Basic </span><span class="default">$auth</span><span class="string">"
<br />        </span><span class="keyword">)
<br />    ),
<br />    </span><span class="string">'http' </span><span class="keyword">=&gt; array(
<br />    </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="string">'tcp://vbinprst10:8080'</span><span class="keyword">,
<br />    </span><span class="string">'request_fulluri'</span><span class="keyword">=&gt;</span><span class="default">true</span><span class="keyword">,
<br />    </span><span class="string">'header' </span><span class="keyword">=&gt; array(
<br />        </span><span class="string">"Proxy-Authorization: Basic </span><span class="default">$auth</span><span class="string">"
<br />        </span><span class="keyword">)
<br />    )
<br />);
<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);
<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>"</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$context</span><span class="keyword">);
<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"<a href="ftp://anonymous:anonymous@ftp.example.org" rel="nofollow" target="_blank">ftp://anonymous:anonymous@ftp.example.org</a>"</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$context</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />It's a bit roundabout, but it works. Note that the 'header' val in the ftp array is redundant, but I kept it in anyway.</span></code></div>
  </div>
 </div>
  <div class="note" id="75211">  <div class="votes">
    <div id="Vu75211">
    <a href="/manual/vote-note.php?id=75211&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75211">
    <a href="/manual/vote-note.php?id=75211&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75211" title="73% like this...">
    12
    </div>
  </div>
  <a href="#75211" class="name">
  <strong class="user"><em>davep at atomicdroplet dot com</em></strong></a><a class="genanchor" href="#75211"> &para;</a><div class="date" title="2007-05-17 04:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75211">
<div class="phpcode"><code><span class="html">In addition to the context options mentioned above (appendix N), lower down context options for sockets can be found in appendix P - <a href="http://www.php.net/manual/en/transports.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/transports.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="110158">  <div class="votes">
    <div id="Vu110158">
    <a href="/manual/vote-note.php?id=110158&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110158">
    <a href="/manual/vote-note.php?id=110158&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110158" title="65% like this...">
    14
    </div>
  </div>
  <a href="#110158" class="name">
  <strong class="user"><em>louis dot huppenbauer at gmail dot com</em></strong></a><a class="genanchor" href="#110158"> &para;</a><div class="date" title="2012-09-25 06:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110158">
<div class="phpcode"><code><span class="html">When using the https protocol you'll have to make sure to set the right context options to use the full "power" of the ssl/tls encryption.<br /><br /><span class="default">&lt;?php<br />$url </span><span class="keyword">= </span><span class="string">'<a href="https://secure.example.com/test/1" rel="nofollow" target="_blank">https://secure.example.com/test/1</a>'</span><span class="keyword">;<br /></span><span class="default">$contextOptions </span><span class="keyword">= array(<br />    </span><span class="string">'ssl' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'verify_peer'   </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'cafile'        </span><span class="keyword">=&gt; </span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">'/cacert.pem'</span><span class="keyword">,<br />        </span><span class="string">'verify_depth'  </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">,<br />        </span><span class="string">'CN_match'      </span><span class="keyword">=&gt; </span><span class="string">'secure.example.com'<br />    </span><span class="keyword">)<br />);<br /></span><span class="default">$sslContext </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$contextOptions</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$sslContext</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />More information about those context options can be found at <a href="http://php.net/manual/en/context.ssl.php" rel="nofollow" target="_blank">http://php.net/manual/en/context.ssl.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="89080">  <div class="votes">
    <div id="Vu89080">
    <a href="/manual/vote-note.php?id=89080&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89080">
    <a href="/manual/vote-note.php?id=89080&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89080" title="58% like this...">
    17
    </div>
  </div>
  <a href="#89080" class="name">
  <strong class="user"><em>rlintern at gmail dot com</em></strong></a><a class="genanchor" href="#89080"> &para;</a><div class="date" title="2009-02-20 09:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89080">
<div class="phpcode"><code><span class="html">I found the following code worked for me for POSTing some binary data to a remote server. I am putting it here since I could not find a quick solution to this by 'googling' or looking through this documentation. <br /><br />Disclaimer:  I have no idea if this a 'good' solution, since I'm new to PHP, but it may just suit your needs as it did mine.  I am assuming bad things will happen with very large files since the entire file is read into $fileContents. <br /><br />I am using PHP 5.2.8.<br /><br />   $fileHandle = fopen("someImage.jpg", "rb");<br />   $fileContents = stream_get_contents($fileHandle);<br />   fclose($fileHandle);<br /><br />   $params = array(<br />      'http' =&gt; array<br />      (<br />          'method' =&gt; 'POST',<br />          'header'=&gt;"Content-Type: multipart/form-data\r\n",<br />          'content' =&gt; $fileContents<br />      )<br />   );<br />   $url = "<a href="http://somesite.somecompany.com?someParam=someValue" rel="nofollow" target="_blank">http://somesite.somecompany.com?someParam=someValue</a>";<br />   $ctx = stream_context_create($params);<br />   $fp = fopen($url, 'rb', false, $ctx);<br /><br />   $response = stream_get_contents($fp);</span></code></div>
  </div>
 </div>
  <div class="note" id="117361">  <div class="votes">
    <div id="Vu117361">
    <a href="/manual/vote-note.php?id=117361&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117361">
    <a href="/manual/vote-note.php?id=117361&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117361" title="60% like this...">
    4
    </div>
  </div>
  <a href="#117361" class="name">
  <strong class="user"><em>Andi</em></strong></a><a class="genanchor" href="#117361"> &para;</a><div class="date" title="2015-05-27 01:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117361">
<div class="phpcode"><code><span class="html">Don't try to re-use the ressource returned by stream_context_create. It seems not to work when connecting to different domains using https.</span></code></div>
  </div>
 </div>
  <div class="note" id="90927">  <div class="votes">
    <div id="Vu90927">
    <a href="/manual/vote-note.php?id=90927&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90927">
    <a href="/manual/vote-note.php?id=90927&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90927" title="60% like this...">
    6
    </div>
  </div>
  <a href="#90927" class="name">
  <strong class="user"><em>Brian Gottier</em></strong></a><a class="genanchor" href="#90927"> &para;</a><div class="date" title="2009-05-16 12:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90927">
<div class="phpcode"><code><span class="html">In some cases, set a header option as an array, and not a string, depending on server configuration.
<br />
<br /><span class="default">&lt;?php
<br />$opts </span><span class="keyword">= array(
<br />  </span><span class="string">'http'</span><span class="keyword">=&gt; array(
<br />    </span><span class="string">'method'</span><span class="keyword">=&gt;   </span><span class="string">"GET"</span><span class="keyword">,
<br />    </span><span class="string">'header'</span><span class="keyword">=&gt;    array( </span><span class="string">"Cookie: foo="</span><span class="default">bar</span><span class="string">"l ),
<br />    'user_agent'=&gt;    </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT']
<br />  )
<br />);
<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92586">  <div class="votes">
    <div id="Vu92586">
    <a href="/manual/vote-note.php?id=92586&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92586">
    <a href="/manual/vote-note.php?id=92586&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92586" title="57% like this...">
    5
    </div>
  </div>
  <a href="#92586" class="name">
  <strong class="user"><em>mathieu dot laurent at gmail dot com</em></strong></a><a class="genanchor" href="#92586"> &para;</a><div class="date" title="2009-07-30 06:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92586">
<div class="phpcode"><code><span class="html">Connection via Proxy<br /><br /><span class="default">&lt;?php<br /><br />$opts </span><span class="keyword">= array(</span><span class="string">'http' </span><span class="keyword">=&gt; array(</span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="string">'tcp://127.0.0.1:8080'</span><span class="keyword">, </span><span class="string">'request_fulluri' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="http://www.php.net" rel="nofollow" target="_blank">http://www.php.net</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br /><br />echo </span><span class="default">$data</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72017">  <div class="votes">
    <div id="Vu72017">
    <a href="/manual/vote-note.php?id=72017&amp;page=function.stream-context-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72017">
    <a href="/manual/vote-note.php?id=72017&amp;page=function.stream-context-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72017" title="56% like this...">
    4
    </div>
  </div>
  <a href="#72017" class="name">
  <strong class="user"><em>sp0n9e at gmail dot com</em></strong></a><a class="genanchor" href="#72017"> &para;</a><div class="date" title="2006-12-28 10:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72017">
<div class="phpcode"><code><span class="html">Here's a very simple way to do posts easily without need of cURL or writing an http request by hand using the tcp:// wrapper.  I like using contexts just because of their ubiquity and the lack of an optional library such as cURL (though one of the more popular libraries).<br /><br /><span class="default">&lt;?php<br /><br />$options </span><span class="keyword">= array(<br />  </span><span class="string">'http'</span><span class="keyword">=&gt;array(<br />    </span><span class="string">'method'</span><span class="keyword">=&gt;</span><span class="string">"POST"</span><span class="keyword">,<br />    </span><span class="string">'header'</span><span class="keyword">=&gt;<br />      </span><span class="string">"Accept-language: en\r\n"</span><span class="keyword">.<br />      </span><span class="string">"Content-type: application/x-www-form-urlencoded\r\n"</span><span class="keyword">,<br />    </span><span class="string">'content'</span><span class="keyword">=&gt;</span><span class="default">http_build_query</span><span class="keyword">(array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">))<br />));<br /><br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);<br /><br /></span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$context</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stream-context-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-context-create.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.stream.php">Stream Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.stream-bucket-append.php" title="stream_&#8203;bucket_&#8203;append">stream_&#8203;bucket_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-make-writeable.php" title="stream_&#8203;bucket_&#8203;make_&#8203;writeable">stream_&#8203;bucket_&#8203;make_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-new.php" title="stream_&#8203;bucket_&#8203;new">stream_&#8203;bucket_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-prepend.php" title="stream_&#8203;bucket_&#8203;prepend">stream_&#8203;bucket_&#8203;prepend</a>
                        </li>
                                                <li class="current">
                            <a href="function.stream-context-create.php" title="stream_&#8203;context_&#8203;create">stream_&#8203;context_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-default.php" title="stream_&#8203;context_&#8203;get_&#8203;default">stream_&#8203;context_&#8203;get_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-options.php" title="stream_&#8203;context_&#8203;get_&#8203;options">stream_&#8203;context_&#8203;get_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-params.php" title="stream_&#8203;context_&#8203;get_&#8203;params">stream_&#8203;context_&#8203;get_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-default.php" title="stream_&#8203;context_&#8203;set_&#8203;default">stream_&#8203;context_&#8203;set_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-option.php" title="stream_&#8203;context_&#8203;set_&#8203;option">stream_&#8203;context_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-options.php" title="stream_&#8203;context_&#8203;set_&#8203;options">stream_&#8203;context_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-params.php" title="stream_&#8203;context_&#8203;set_&#8203;params">stream_&#8203;context_&#8203;set_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-copy-to-stream.php" title="stream_&#8203;copy_&#8203;to_&#8203;stream">stream_&#8203;copy_&#8203;to_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-append.php" title="stream_&#8203;filter_&#8203;append">stream_&#8203;filter_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-prepend.php" title="stream_&#8203;filter_&#8203;prepend">stream_&#8203;filter_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-register.php" title="stream_&#8203;filter_&#8203;register">stream_&#8203;filter_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-remove.php" title="stream_&#8203;filter_&#8203;remove">stream_&#8203;filter_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-contents.php" title="stream_&#8203;get_&#8203;contents">stream_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-filters.php" title="stream_&#8203;get_&#8203;filters">stream_&#8203;get_&#8203;filters</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-line.php" title="stream_&#8203;get_&#8203;line">stream_&#8203;get_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-meta-data.php" title="stream_&#8203;get_&#8203;meta_&#8203;data">stream_&#8203;get_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-transports.php" title="stream_&#8203;get_&#8203;transports">stream_&#8203;get_&#8203;transports</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-wrappers.php" title="stream_&#8203;get_&#8203;wrappers">stream_&#8203;get_&#8203;wrappers</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-is-local.php" title="stream_&#8203;is_&#8203;local">stream_&#8203;is_&#8203;local</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-isatty.php" title="stream_&#8203;isatty">stream_&#8203;isatty</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-notification-callback.php" title="stream_&#8203;notification_&#8203;callback">stream_&#8203;notification_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-register-wrapper.php" title="stream_&#8203;register_&#8203;wrapper">stream_&#8203;register_&#8203;wrapper</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-resolve-include-path.php" title="stream_&#8203;resolve_&#8203;include_&#8203;path">stream_&#8203;resolve_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-select.php" title="stream_&#8203;select">stream_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-blocking.php" title="stream_&#8203;set_&#8203;blocking">stream_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-chunk-size.php" title="stream_&#8203;set_&#8203;chunk_&#8203;size">stream_&#8203;set_&#8203;chunk_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-read-buffer.php" title="stream_&#8203;set_&#8203;read_&#8203;buffer">stream_&#8203;set_&#8203;read_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-timeout.php" title="stream_&#8203;set_&#8203;timeout">stream_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-write-buffer.php" title="stream_&#8203;set_&#8203;write_&#8203;buffer">stream_&#8203;set_&#8203;write_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-accept.php" title="stream_&#8203;socket_&#8203;accept">stream_&#8203;socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-client.php" title="stream_&#8203;socket_&#8203;client">stream_&#8203;socket_&#8203;client</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-enable-crypto.php" title="stream_&#8203;socket_&#8203;enable_&#8203;crypto">stream_&#8203;socket_&#8203;enable_&#8203;crypto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-get-name.php" title="stream_&#8203;socket_&#8203;get_&#8203;name">stream_&#8203;socket_&#8203;get_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-pair.php" title="stream_&#8203;socket_&#8203;pair">stream_&#8203;socket_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-recvfrom.php" title="stream_&#8203;socket_&#8203;recvfrom">stream_&#8203;socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-sendto.php" title="stream_&#8203;socket_&#8203;sendto">stream_&#8203;socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-server.php" title="stream_&#8203;socket_&#8203;server">stream_&#8203;socket_&#8203;server</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-shutdown.php" title="stream_&#8203;socket_&#8203;shutdown">stream_&#8203;socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-supports-lock.php" title="stream_&#8203;supports_&#8203;lock">stream_&#8203;supports_&#8203;lock</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-register.php" title="stream_&#8203;wrapper_&#8203;register">stream_&#8203;wrapper_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-restore.php" title="stream_&#8203;wrapper_&#8203;restore">stream_&#8203;wrapper_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-unregister.php" title="stream_&#8203;wrapper_&#8203;unregister">stream_&#8203;wrapper_&#8203;unregister</a>
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
