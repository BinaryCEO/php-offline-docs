<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: spl_object_hash - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.spl-object-hash.php">
 <link rel="shorturl" href="https://www.php.net/spl-object-hash">
 <link rel="alternate" href="https://www.php.net/spl-object-hash" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.spl-classes.php">
 <link rel="next" href="https://www.php.net/manual/en/function.spl-object-id.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.spl-object-hash.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.spl-object-hash.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.spl-object-hash.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.spl-object-hash.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.spl-object-hash.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.spl-object-hash.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.spl-object-hash.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.spl-object-hash.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.spl-object-hash.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.spl-object-hash.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.spl-object-hash.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return hash id for given object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: spl_object_hash - Manual" />
<meta name="twitter:description" content="Return hash id for given object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: spl_object_hash - Manual" />
<meta itemprop="description" content="Return hash id for given object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return hash id for given object" />

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
        <a href="function.spl-object-id.php">
          spl_object_id &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.spl-classes.php">
          &laquo; spl_classes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='ref.spl.php'>SPL Functions</a></li>      </ul>
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
            <option value='en/function.spl-object-hash.php' selected="selected">English</option>
            <option value='de/function.spl-object-hash.php'>German</option>
            <option value='es/function.spl-object-hash.php'>Spanish</option>
            <option value='fr/function.spl-object-hash.php'>French</option>
            <option value='it/function.spl-object-hash.php'>Italian</option>
            <option value='ja/function.spl-object-hash.php'>Japanese</option>
            <option value='pt_BR/function.spl-object-hash.php'>Brazilian Portuguese</option>
            <option value='ru/function.spl-object-hash.php'>Russian</option>
            <option value='tr/function.spl-object-hash.php'>Turkish</option>
            <option value='uk/function.spl-object-hash.php'>Ukrainian</option>
            <option value='zh/function.spl-object-hash.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.spl-object-hash" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">spl_object_hash</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">spl_object_hash</span> &mdash; <span class="dc-title">
   Return hash id for given object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.spl-object-hash-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>spl_object_hash</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function returns a unique identifier for the object. This id can be
   used as a hash key for storing objects, or for identifying an object, as long
   as the object is not destroyed. Once the object is destroyed, its hash may 
   be reused for other objects. This behavior is similar to
   <span class="function"><a href="function.spl-object-id.php" class="function">spl_object_id()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.spl-object-hash-parameters">
   <h3 class="title">Parameters</h3>
   <p class="para">
    <dl>
     
      <dt><code class="parameter">object</code></dt>
      <dd>
       <p class="para">
        Any object. 
       </p>
      </dd>
     
    </dl>
   </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.spl-object-hash-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A string that is unique for each currently existing object and is always
   the same for each object.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.spl-object-hash-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4036">
    <p><strong>Example #1 A <span class="function"><strong>spl_object_hash()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$id </span><span style="color: #007700">= </span><span style="color: #0000BB">spl_object_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$storage</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">] = </span><span style="color: #0000BB">$object</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.spl-object-hash-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When an object is destroyed, its hash may be reused for other objects.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Object hashes should be compared for identity with <code class="code">===</code> and
    <code class="code">!==</code>, because the returned hash could be a
    <a href="language.types.numeric-strings.php" class="link">numeric string</a>.
    For example: <code class="literal">0000000000000e600000000000000000</code>.
   </p>
  </p></blockquote>
 </div>
 
 <div class="refsect1 seealso" id="refsect1-function.spl-object-hash-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.spl-object-id.php" class="function" rel="rdfs-seeAlso">spl_object_id()</a> - Return the integer object handle for given object</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/functions/spl-object-hash.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.spl-object-hash%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.spl-object-hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-object-hash.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76220">  <div class="votes">
    <div id="Vu76220">
    <a href="/manual/vote-note.php?id=76220&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76220">
    <a href="/manual/vote-note.php?id=76220&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76220" title="91% like this...">
    107
    </div>
  </div>
  <a href="#76220" class="name">
  <strong class="user"><em>planetbeing</em></strong></a><a class="genanchor" href="#76220"> &para;</a><div class="date" title="2007-07-05 04:40"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76220">
<div class="phpcode"><code><span class="html">Note that the contents (properties) of the object are NOT hashed by the function, merely its internal handle and handler table pointer. This is sufficient to guarantee that any two objects simultaneously co-residing in memory will have different hashes. Uniqueness is not guaranteed between objects that did not reside in memory simultaneously, for example:<br /><br />var_dump(spl_object_hash(new stdClass()), spl_object_hash(new stdClass()));<br /><br />Running this alone will usually generate the same hashes, since PHP reuses the internal handle for the first stdClass after it has been dereferenced and destroyed when it creates the second stdClass.</span></code></div>
  </div>
 </div>
  <div class="note" id="112199">  <div class="votes">
    <div id="Vu112199">
    <a href="/manual/vote-note.php?id=112199&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112199">
    <a href="/manual/vote-note.php?id=112199&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112199" title="78% like this...">
    70
    </div>
  </div>
  <a href="#112199" class="name">
  <strong class="user"><em>mjs at beebo dot org</em></strong></a><a class="genanchor" href="#112199"> &para;</a><div class="date" title="2013-05-16 11:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112199">
<div class="phpcode"><code><span class="html">Note that given two different objects spl_object_hash() can return values that look very similar, and in fact both the most significant *and* least significant digits are likely to be identical!  e.g. "000000003cc56d770000000007fa48c5" and "000000003cc56d0d0000000007fa48c5".<br /><br />Therefore (especially if using this function for debugging), you may wish to pass the hash into a cryptographic hash function like md5() to get to facilitate visual comparisons, and make it more likely that the first few or last few digits are unique.<br /><br />md5("000000003cc56d770000000007fa48c5") -&gt; "619a799747d348fa1caf181a72b65d9f"<br /><br />md5("000000003cc56d0d0000000007fa48c5") -&gt; "ae964bc912281e7804fe5a88b4546cb2"</span></code></div>
  </div>
 </div>
  <div class="note" id="128374">  <div class="votes">
    <div id="Vu128374">
    <a href="/manual/vote-note.php?id=128374&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128374">
    <a href="/manual/vote-note.php?id=128374&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128374" title="100% like this...">
    5
    </div>
  </div>
  <a href="#128374" class="name">
  <strong class="user"><em>A simple developer</em></strong></a><a class="genanchor" href="#128374"> &para;</a><div class="date" title="2023-04-06 08:10"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128374">
<div class="phpcode"><code><span class="html">Attention when comparing object hashes in PHP &gt;= 8.1<br /><br />In PHP 8.1 (I think) the output of spl_object_hash() changed (see pull request <a href="https://github.com/php/php-src/pull/7010" rel="nofollow" target="_blank">https://github.com/php/php-src/pull/7010</a>).<br />This lead to a strange misbehaviour of our application, as we stored object hashes in an array to check, if we processed object already. A simple in_array() check returned true, even though the current object hash was NOT actually in array.<br /><br />Actual problem: New hashes are much more simple and can be something like "0000000000000e600000000000000000" or "0000000000000e490000000000000000", which PHP will interpret as numeric (exponent).<br />in_array() will compare non type-safe by default and will interpret named hashes as "0".</span></code></div>
  </div>
 </div>
  <div class="note" id="128395">  <div class="votes">
    <div id="Vu128395">
    <a href="/manual/vote-note.php?id=128395&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128395">
    <a href="/manual/vote-note.php?id=128395&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128395" title="100% like this...">
    3
    </div>
  </div>
  <a href="#128395" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#128395"> &para;</a><div class="date" title="2023-04-14 12:17"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128395">
<div class="phpcode"><code><span class="html">This function is slightly older than spl_object_id. Its output is more complex but doesn't actually provide any more information than the newer function. It used to be a lot more complex (without being any more informative) but now it's merely the object's ID number written in hex with a lot of padding to maintain the old format. spl_object_id just gives the ID number as a plain integer.<br /><br />You're probably better off using spl_object_id, and thinking about migrating if you're already using spl_object_hash; there is a chance this function will be deprecated and subsequently removed in the future.</span></code></div>
  </div>
 </div>
  <div class="note" id="122217">  <div class="votes">
    <div id="Vu122217">
    <a href="/manual/vote-note.php?id=122217&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122217">
    <a href="/manual/vote-note.php?id=122217&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122217" title="89% like this...">
    29
    </div>
  </div>
  <a href="#122217" class="name">
  <strong class="user"><em>aa dot vasilenko at gmail dot com</em></strong></a><a class="genanchor" href="#122217"> &para;</a><div class="date" title="2018-01-03 07:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122217">
<div class="phpcode"><code><span class="html">Please note that since PHP 7.2 there's new function available spl_object_id() which returns int instead of string. It's (supposed to be) more performant. Due to lack of documentation I recommend you reading the PR <a href="https://github.com/php/php-src/pull/2611" rel="nofollow" target="_blank">https://github.com/php/php-src/pull/2611</a></span></code></div>
  </div>
 </div>
  <div class="note" id="122852">  <div class="votes">
    <div id="Vu122852">
    <a href="/manual/vote-note.php?id=122852&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122852">
    <a href="/manual/vote-note.php?id=122852&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122852" title="87% like this...">
    12
    </div>
  </div>
  <a href="#122852" class="name">
  <strong class="user"><em>DimeCadmium</em></strong></a><a class="genanchor" href="#122852"> &para;</a><div class="date" title="2018-06-18 03:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122852">
<div class="phpcode"><code><span class="html">For those who believe this function is misnamed, I would like to direct you to <a href="https://en.wikipedia.org/wiki/Hash_function" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Hash_function</a> . Also, for those who think it's misnamed and supply a comparison to Python, I would like to direct you to <a href="https://docs.python.org/2/library/functions.html#hash" rel="nofollow" target="_blank">https://docs.python.org/2/library/functions.html#hash</a> which does the same thing as this function. (From Python's data-model docs: "User-defined classes have __cmp__() and __hash__() methods by default; ... x.__hash__() returns a result derived from id(x)." - id(x) returns the memory address of the object.)<br /><br />The cryptographic hash functions you are familiar with, like MD5 or SHA1, are named hash functions because they have a similar design goal: low chance of collisions.</span></code></div>
  </div>
 </div>
  <div class="note" id="121491">  <div class="votes">
    <div id="Vu121491">
    <a href="/manual/vote-note.php?id=121491&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121491">
    <a href="/manual/vote-note.php?id=121491&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121491" title="73% like this...">
    9
    </div>
  </div>
  <a href="#121491" class="name">
  <strong class="user"><em>Hayleu Watson</em></strong></a><a class="genanchor" href="#121491"> &para;</a><div class="date" title="2017-08-06 10:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121491">
<div class="phpcode"><code><span class="html">The "hash" mentioned in the name of this function refers to the storage structure known as a "hash table", not to any sort of "message digest". The string returned by this function is little more than the object's address in the (hash) table PHP maintains of all existing objects.</span></code></div>
  </div>
 </div>
  <div class="note" id="129141">  <div class="votes">
    <div id="Vu129141">
    <a href="/manual/vote-note.php?id=129141&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129141">
    <a href="/manual/vote-note.php?id=129141&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129141" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129141" class="name">
  <strong class="user"><em>Numety</em></strong></a><a class="genanchor" href="#129141"> &para;</a><div class="date" title="2024-01-04 10:36"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129141">
<div class="phpcode"><code><span class="html">As others have noted, this function now returns the ID, padded with zeroes.<br />It does not produce a cryptographic hash (which is not what the name hints at, either), nor does it hide it which order the objects were created.<br /><br />If you wish to give your objects unique identifiers while hiding in which order they were created, you can achieve this by hashing their ID together with other predictable values:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">objectHash</span><span class="keyword">(</span><span class="default">object $object</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    return </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'sha512'</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">::class . </span><span class="default">spl_object_id</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Here's an example usage:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Person<br /></span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(public </span><span class="default">string $name</span><span class="keyword">) {}<br />}<br /><br /></span><span class="default">$anna </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">(</span><span class="string">'Anna'</span><span class="keyword">);<br /></span><span class="default">$bob </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">(</span><span class="string">'Bob'</span><span class="keyword">);<br /><br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">objectHash</span><span class="keyword">(</span><span class="default">$anna</span><span class="keyword">));   </span><span class="comment">// '077d33c1 etc.<br /></span><span class="keyword">echo </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">objectHash</span><span class="keyword">(</span><span class="default">$bob</span><span class="keyword">));    </span><span class="comment">// 'ea3c1319 etc.<br /><br /></span><span class="default">?&gt;<br /></span><br />Feel free to choose another hash, or hash other values along with their ID, for it to better suit your environment.</span></code></div>
  </div>
 </div>
  <div class="note" id="129125">  <div class="votes">
    <div id="Vu129125">
    <a href="/manual/vote-note.php?id=129125&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129125">
    <a href="/manual/vote-note.php?id=129125&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129125" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129125" class="name">
  <strong class="user"><em>jasonlester at nope dot com</em></strong></a><a class="genanchor" href="#129125"> &para;</a><div class="date" title="2023-12-24 05:24"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129125">
<div class="phpcode"><code><span class="html">obj-&gt;handle is an unsigned long that starts a 0 and is incremented by 1 every time an object is created, it is not a true pointer such as if created by mallaoc() or similar.<br /><br />/* {{{ Returns the integer object handle for the given object */<br />PHP_FUNCTION(spl_object_id)<br />{<br />    zend_object *obj;<br /><br />    ZEND_PARSE_PARAMETERS_START(1, 1)<br />        Z_PARAM_OBJ(obj)<br />    ZEND_PARSE_PARAMETERS_END();<br /><br />    RETURN_LONG((zend_long)obj-&gt;handle);<br />}<br />/* }}} */<br /><br />PHPAPI zend_string *php_spl_object_hash(zend_object *obj) /* {{{*/<br />{<br />    return strpprintf(32, "%016zx0000000000000000", (intptr_t)obj-&gt;handle);<br />}<br />/* }}} */</span></code></div>
  </div>
 </div>
  <div class="note" id="121490">  <div class="votes">
    <div id="Vu121490">
    <a href="/manual/vote-note.php?id=121490&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121490">
    <a href="/manual/vote-note.php?id=121490&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121490" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#121490" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121490"> &para;</a><div class="date" title="2017-08-06 10:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121490">
<div class="phpcode"><code><span class="html">The "hash" mentioned in this function is used in the sense of the storage structure known as a "hash table", not in the sense of "message digest".</span></code></div>
  </div>
 </div>
  <div class="note" id="121277">  <div class="votes">
    <div id="Vu121277">
    <a href="/manual/vote-note.php?id=121277&amp;page=function.spl-object-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121277">
    <a href="/manual/vote-note.php?id=121277&amp;page=function.spl-object-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121277" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#121277" class="name">
  <strong class="user"><em>Ulrich Eckhardt</em></strong></a><a class="genanchor" href="#121277"> &para;</a><div class="date" title="2017-06-27 07:56"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121277">
<div class="phpcode"><code><span class="html">Calling this a hash is very misleading:<br /><br />1. This function gives an object identifier (ID), which uniquely identifies the object for its whole lifetime. This is similar to the address of an object in C or the id() function in Python. I'm sure other languages have similar constructs.<br />2. This is not a hash and has nothing to do with it. A hash takes data and algorithmically reduces that data to some kind of scalar value. The only guarantee is that two equal inputs provide the same output, but not that two different inputs provide different outputs (hint: hash collisions). spl_object_hash() guarantees different outputs for non-identical objects though.<br />3. As someone mentioned already, this does not look at the content of the object. If you consider the difference between equality and identity, it only allows determining identity. If you serialize and unserialize an object, it will not be identical to its former self, but it will be equal, just to give an example. If you want a key to use in a response cache, using this function on the request is not only useless, because equal requests have different IDs, but possibly even harmful, because when a request object is garbage collected, its ID can be reused.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.spl-object-hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-object-hash.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.spl.php">SPL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-implements.php" title="class_&#8203;implements">class_&#8203;implements</a>
                        </li>
                                                <li class="">
                            <a href="function.class-parents.php" title="class_&#8203;parents">class_&#8203;parents</a>
                        </li>
                                                <li class="">
                            <a href="function.class-uses.php" title="class_&#8203;uses">class_&#8203;uses</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-apply.php" title="iterator_&#8203;apply">iterator_&#8203;apply</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-count.php" title="iterator_&#8203;count">iterator_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-to-array.php" title="iterator_&#8203;to_&#8203;array">iterator_&#8203;to_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload.php" title="spl_&#8203;autoload">spl_&#8203;autoload</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-call.php" title="spl_&#8203;autoload_&#8203;call">spl_&#8203;autoload_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-extensions.php" title="spl_&#8203;autoload_&#8203;extensions">spl_&#8203;autoload_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-functions.php" title="spl_&#8203;autoload_&#8203;functions">spl_&#8203;autoload_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-register.php" title="spl_&#8203;autoload_&#8203;register">spl_&#8203;autoload_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-unregister.php" title="spl_&#8203;autoload_&#8203;unregister">spl_&#8203;autoload_&#8203;unregister</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-classes.php" title="spl_&#8203;classes">spl_&#8203;classes</a>
                        </li>
                                                <li class="current">
                            <a href="function.spl-object-hash.php" title="spl_&#8203;object_&#8203;hash">spl_&#8203;object_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-id.php" title="spl_&#8203;object_&#8203;id">spl_&#8203;object_&#8203;id</a>
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
