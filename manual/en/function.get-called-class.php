<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_called_class - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-called-class.php">
 <link rel="shorturl" href="https://www.php.net/get-called-class">
 <link rel="alternate" href="https://www.php.net/get-called-class" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.enum-exists.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-class.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-called-class.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-called-class.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-called-class.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-called-class.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-called-class.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-called-class.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-called-class.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-called-class.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-called-class.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-called-class.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-called-class.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The &quot;Late Static Binding&quot; class name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_called_class - Manual" />
<meta name="twitter:description" content="The &quot;Late Static Binding&quot; class name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_called_class - Manual" />
<meta itemprop="description" content="The &quot;Late Static Binding&quot; class name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The &quot;Late Static Binding&quot; class name" />

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
        <a href="function.get-class.php">
          get_class &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.enum-exists.php">
          &laquo; enum_exists        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      <li><a href='ref.classobj.php'>Classes/Object Functions</a></li>      </ul>
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
            <option value='en/function.get-called-class.php' selected="selected">English</option>
            <option value='de/function.get-called-class.php'>German</option>
            <option value='es/function.get-called-class.php'>Spanish</option>
            <option value='fr/function.get-called-class.php'>French</option>
            <option value='it/function.get-called-class.php'>Italian</option>
            <option value='ja/function.get-called-class.php'>Japanese</option>
            <option value='pt_BR/function.get-called-class.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-called-class.php'>Russian</option>
            <option value='tr/function.get-called-class.php'>Turkish</option>
            <option value='uk/function.get-called-class.php'>Ukrainian</option>
            <option value='zh/function.get-called-class.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-called-class" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_called_class</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_called_class</span> &mdash; <span class="dc-title">The &quot;Late Static Binding&quot; class name</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.get-called-class-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_called_class</strong></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Gets the name of the class the static method is called in.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.get-called-class-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.get-called-class-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the class name.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-function.get-called-class-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If <span class="function"><strong>get_called_class()</strong></span> is called from outside a class,
   an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown. Prior to PHP 8.0.0,
   an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error was raised.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-function.get-called-class-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        Calling this function from outside a class,
        will now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
        Previously, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised
        and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.get-called-class-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5342">
    <p><strong>Example #1 Using <span class="function"><strong>get_called_class()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    static public function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_called_class</span><span style="color: #007700">());<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">bar </span><span style="color: #007700">extends </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">bar</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(3) &quot;foo&quot;
string(3) &quot;bar&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.get-called-class-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-parent-class.php" class="function" rel="rdfs-seeAlso">get_parent_class()</a> - Retrieves the parent class name for object or class</span></li>
    <li><span class="function"><a href="function.get-class.php" class="function" rel="rdfs-seeAlso">get_class()</a> - Returns the name of the class of an object</span></li>
    <li><span class="function"><a href="function.is-subclass-of.php" class="function" rel="rdfs-seeAlso">is_subclass_of()</a> - Checks if the object has this class as one of its parents or implements it</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/functions/get-called-class.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-called-class%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-called-class&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-called-class.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115790">  <div class="votes">
    <div id="Vu115790">
    <a href="/manual/vote-note.php?id=115790&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115790">
    <a href="/manual/vote-note.php?id=115790&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115790" title="89% like this...">
    87
    </div>
  </div>
  <a href="#115790" class="name">
  <strong class="user"><em>Safak Ozpinar</em></strong></a><a class="genanchor" href="#115790"> &para;</a><div class="date" title="2014-09-24 07:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115790">
<div class="phpcode"><code><span class="html">As of PHP 5.5 you can also use "static::class" to get the name of the called class.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Bar </span><span class="keyword">{<br />    public static function </span><span class="default">test</span><span class="keyword">() {<br />        </span><span class="default">var_dump</span><span class="keyword">(static::class);<br />    }<br />}<br /><br />class </span><span class="default">Foo </span><span class="keyword">extends </span><span class="default">Bar </span><span class="keyword">{<br /><br />}<br /><br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">Bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />string(3) "Foo"<br />string(3) "Bar"</span></code></div>
  </div>
 </div>
  <div class="note" id="111312">  <div class="votes">
    <div id="Vu111312">
    <a href="/manual/vote-note.php?id=111312&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111312">
    <a href="/manual/vote-note.php?id=111312&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111312" title="84% like this...">
    13
    </div>
  </div>
  <a href="#111312" class="name">
  <strong class="user"><em>luc at s dot illi dot be</em></strong></a><a class="genanchor" href="#111312"> &para;</a><div class="date" title="2013-02-05 03:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111312">
<div class="phpcode"><code><span class="html">get_called_class() in closure-scopes:<br /><br /><span class="default">&lt;?PHP<br />    </span><span class="keyword">ABSTRACT CLASS </span><span class="default">Base<br />    </span><span class="keyword">{<br />        protected static </span><span class="default">$stub </span><span class="keyword">= [</span><span class="string">'baz'</span><span class="keyword">];<br />        <br />        </span><span class="comment">//final public function boot()<br />        </span><span class="keyword">static public function </span><span class="default">boot</span><span class="keyword">()<br />        {<br />            print </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'-&gt; '</span><span class="keyword">.</span><span class="default">get_called_class</span><span class="keyword">().</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            <br />            </span><span class="default">array_walk</span><span class="keyword">(static::</span><span class="default">$stub</span><span class="keyword">, function()<br />            {<br />                print </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'-&gt; '</span><span class="keyword">.</span><span class="default">get_called_class</span><span class="keyword">().</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            });<br />        }<br />        <br />        public function </span><span class="default">__construct</span><span class="keyword">()<br />        {<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">boot</span><span class="keyword">();<br />            print </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'-&gt; '</span><span class="keyword">.</span><span class="default">get_called_class</span><span class="keyword">().</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            <br />            </span><span class="default">array_walk</span><span class="keyword">(static::</span><span class="default">$stub</span><span class="keyword">, function()<br />            {<br />                print </span><span class="default">__METHOD__</span><span class="keyword">.</span><span class="string">'-&gt; '</span><span class="keyword">.</span><span class="default">get_called_class</span><span class="keyword">().</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            });<br />        }<br />    }<br />    <br />    CLASS </span><span class="default">Sub </span><span class="keyword">EXTENDS </span><span class="default">Base<br />    </span><span class="keyword">{<br />    }<br />    <br />    </span><span class="comment">// static boot<br />        </span><span class="default">Base</span><span class="keyword">::</span><span class="default">boot</span><span class="keyword">(); print </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="comment">// Base::boot        -&gt; Base<br />            // Base::{closure}    -&gt; Base<br />            <br />        </span><span class="default">Sub</span><span class="keyword">::</span><span class="default">boot</span><span class="keyword">(); print </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="comment">// Base::boot        -&gt; Sub<br />            // Base::{closure}    -&gt; Base<br />            <br />        </span><span class="keyword">new </span><span class="default">sub</span><span class="keyword">;<br />            </span><span class="comment">// Base::boot        -&gt; Sub<br />            // Base::{closure}    -&gt; Base<br />            // Base-&gt;__construct    -&gt; Sub<br />            // Base-&gt;{closure}    -&gt; Sub<br />    <br />    // instance boot<br />        </span><span class="keyword">new </span><span class="default">sub</span><span class="keyword">;<br />            </span><span class="comment">// Base-&gt;boot        -&gt; Sub<br />            // Base-&gt;{closure}    -&gt; Sub<br />            // Base-&gt;__construct    -&gt; Sub<br />            // Base-&gt;{closure}    -&gt; Sub<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124848">  <div class="votes">
    <div id="Vu124848">
    <a href="/manual/vote-note.php?id=124848&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124848">
    <a href="/manual/vote-note.php?id=124848&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124848" title="85% like this...">
    5
    </div>
  </div>
  <a href="#124848" class="name">
  <strong class="user"><em>amcolin at 126 dot com</em></strong></a><a class="genanchor" href="#124848"> &para;</a><div class="date" title="2020-03-24 07:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124848">
<div class="phpcode"><code><span class="html">namespace root;<br />class Factor {<br />    protected static $instance = null;<br /><br />    private function __construct() {<br /><br />    }<br /><br />    public static function getInstance() {<br />        if (!self::$instance) {<br />            $name           = get_called_class();<br />            self::$instance = new $name();<br />        }<br /><br />        return self::$instance;<br />    }<br />}<br /><br />namespace admin\test;<br /><br />use root\Factor;<br /><br />class Single extends Factor {<br />    public function abc() {<br />        return 'abc';<br />    }<br />}<br /><br />namespace index;<br /><br />use admin\test\Single;<br /><br />class Index {<br />    public function get() {<br />        return Single::getInstance();<br />    }<br />}<br /><br />$index = new Index();<br />var_dump($index-&gt;get());<br /><br />The result is:<br /><br />object(admin\test\Single)#2 (0) {<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="103309">  <div class="votes">
    <div id="Vu103309">
    <a href="/manual/vote-note.php?id=103309&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103309">
    <a href="/manual/vote-note.php?id=103309&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103309" title="80% like this...">
    16
    </div>
  </div>
  <a href="#103309" class="name">
  <strong class="user"><em>uebele</em></strong></a><a class="genanchor" href="#103309"> &para;</a><div class="date" title="2011-04-06 09:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103309">
<div class="phpcode"><code><span class="html">SEE: <a href="http://php.net/manual/en/language.oop5.late-static-bindings.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.oop5.late-static-bindings.php</a><br /><br />I think it is worth mentioning on this page, that many uses of the value returned by get_called_function() could be handled with the new use of the old keyword static, as in<br /><span class="default">&lt;?php <br /></span><span class="keyword">static::</span><span class="default">$foo</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />versus<br /><span class="default">&lt;?php<br />$that</span><span class="keyword">=</span><span class="default">get_called_class</span><span class="keyword">();<br /></span><span class="default">$that</span><span class="keyword">::</span><span class="default">$foo</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />I had been using $that:: as my conventional replacement for self:: until my googling landed me the url above.  I have replaced all uses of $that with static with success both as <br /><span class="default">&lt;?php <br /></span><span class="keyword">static::</span><span class="default">$foo</span><span class="keyword">; </span><span class="comment">//and...<br /></span><span class="keyword">new static();<br /></span><span class="default">?&gt;<br /></span><br />Since static:: is listed with the limitation: "Another difference is that static:: can only refer to static properties." one may still need to use a $that:: to call static functions; though I have not yet needed this semantic.</span></code></div>
  </div>
 </div>
  <div class="note" id="121632">  <div class="votes">
    <div id="Vu121632">
    <a href="/manual/vote-note.php?id=121632&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121632">
    <a href="/manual/vote-note.php?id=121632&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121632" title="70% like this...">
    4
    </div>
  </div>
  <a href="#121632" class="name">
  <strong class="user"><em>fantomx1 at gmail dot com</em></strong></a><a class="genanchor" href="#121632"> &para;</a><div class="date" title="2017-09-12 03:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121632">
<div class="phpcode"><code><span class="html">When calling dynamic method statically in php 5.6 (under 7) it allows it, but it doesnt work, it incorrectly evaluates class that called our subject class, therefore containing method must be static.</span></code></div>
  </div>
 </div>
  <div class="note" id="86231">  <div class="votes">
    <div id="Vu86231">
    <a href="/manual/vote-note.php?id=86231&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86231">
    <a href="/manual/vote-note.php?id=86231&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86231" title="62% like this...">
    9
    </div>
  </div>
  <a href="#86231" class="name">
  <strong class="user"><em>danbettles at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#86231"> &para;</a><div class="date" title="2008-10-08 12:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86231">
<div class="phpcode"><code><span class="html">It is possible to write a completely self-contained Singleton base class in PHP 5.3 using get_called_class.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">abstract class </span><span class="default">Singleton </span><span class="keyword">{
<br />
<br />    protected function </span><span class="default">__construct</span><span class="keyword">() {
<br />    }
<br />
<br />    final public static function </span><span class="default">getInstance</span><span class="keyword">() {
<br />        static </span><span class="default">$aoInstance </span><span class="keyword">= array();
<br />
<br />        </span><span class="default">$calledClassName </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();
<br />
<br />        if (! isset (</span><span class="default">$aoInstance</span><span class="keyword">[</span><span class="default">$calledClassName</span><span class="keyword">])) {
<br />            </span><span class="default">$aoInstance</span><span class="keyword">[</span><span class="default">$calledClassName</span><span class="keyword">] = new </span><span class="default">$calledClassName</span><span class="keyword">();
<br />        }
<br />
<br />        return </span><span class="default">$aoInstance</span><span class="keyword">[</span><span class="default">$calledClassName</span><span class="keyword">];
<br />    }
<br />
<br />    final private function </span><span class="default">__clone</span><span class="keyword">() {
<br />    }
<br />}
<br />
<br />class </span><span class="default">DatabaseConnection </span><span class="keyword">extends </span><span class="default">Singleton </span><span class="keyword">{
<br />
<br />    protected </span><span class="default">$connection</span><span class="keyword">;
<br />
<br />    protected function </span><span class="default">__construct</span><span class="keyword">() {
<br />        </span><span class="comment">// @todo Connect to the database
<br />    </span><span class="keyword">}
<br />
<br />    public function </span><span class="default">__destruct</span><span class="keyword">() {
<br />        </span><span class="comment">// @todo Drop the connection to the database
<br />    </span><span class="keyword">}
<br />}
<br />
<br /></span><span class="default">$oDbConn </span><span class="keyword">= new </span><span class="default">DatabaseConnection</span><span class="keyword">();  </span><span class="comment">// Fatal error
<br />
<br /></span><span class="default">$oDbConn </span><span class="keyword">= </span><span class="default">DatabaseConnection</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();  </span><span class="comment">// Returns single instance
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92757">  <div class="votes">
    <div id="Vu92757">
    <a href="/manual/vote-note.php?id=92757&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92757">
    <a href="/manual/vote-note.php?id=92757&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92757" title="61% like this...">
    5
    </div>
  </div>
  <a href="#92757" class="name">
  <strong class="user"><em>php at itronic dot at</em></strong></a><a class="genanchor" href="#92757"> &para;</a><div class="date" title="2009-08-07 06:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92757">
<div class="phpcode"><code><span class="html">If you call a static getInstance() function to create a instance of a class from another class, this function have to be static, if it is not static the original name of the caller class and not of the current class get returned.<br /><br />example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">a </span><span class="keyword">{<br />  function </span><span class="default">getXName</span><span class="keyword">() {<br />     return </span><span class="default">x</span><span class="keyword">::</span><span class="default">getClassName</span><span class="keyword">();<br />  }<br />  function </span><span class="default">getXStaticName</span><span class="keyword">() {<br />     return </span><span class="default">x</span><span class="keyword">::</span><span class="default">getStaticClassName</span><span class="keyword">();<br />  }<br /><br />}<br /><br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a </span><span class="keyword">{<br />}<br /><br />class </span><span class="default">x </span><span class="keyword">{<br />  public function </span><span class="default">getClassName</span><span class="keyword">() {<br />    return </span><span class="default">get_called_class</span><span class="keyword">();<br />  }<br />  public static function </span><span class="default">getStaticClassName</span><span class="keyword">() {<br />    return </span><span class="default">get_called_class</span><span class="keyword">();<br />  }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">a</span><span class="keyword">();<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">b</span><span class="keyword">();<br /><br />echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">getXName</span><span class="keyword">(); </span><span class="comment">// will return "a"<br /></span><span class="keyword">echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">getXName</span><span class="keyword">(); </span><span class="comment">// will return "b"<br /><br /></span><span class="keyword">echo </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">getXStaticName</span><span class="keyword">(); </span><span class="comment">// will return "x"<br /></span><span class="keyword">echo </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">getXStaticName</span><span class="keyword">(); </span><span class="comment">// will return "x"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94331">  <div class="votes">
    <div id="Vu94331">
    <a href="/manual/vote-note.php?id=94331&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94331">
    <a href="/manual/vote-note.php?id=94331&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94331" title="54% like this...">
    2
    </div>
  </div>
  <a href="#94331" class="name">
  <strong class="user"><em>Abhi Beckert</em></strong></a><a class="genanchor" href="#94331"> &para;</a><div class="date" title="2009-10-28 08:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94331">
<div class="phpcode"><code><span class="html">Beware that this does not behave as expected if your method is not declared as static! For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />  static public function </span><span class="default">test</span><span class="keyword">() {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">get_called_class</span><span class="keyword">());<br />  }<br />  <br />  public function </span><span class="default">testTwo</span><span class="keyword">() {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">get_called_class</span><span class="keyword">());<br />  }<br />}<br /><br />class </span><span class="default">bar </span><span class="keyword">extends </span><span class="default">foo </span><span class="keyword">{<br />}<br /><br />class </span><span class="default">abc </span><span class="keyword">{<br />  function </span><span class="default">test</span><span class="keyword">() {<br />    </span><span class="default">foo</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br />    </span><span class="default">bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br />  }<br />  <br />  function </span><span class="default">testTwo</span><span class="keyword">() {<br />    </span><span class="default">foo</span><span class="keyword">::</span><span class="default">testTwo</span><span class="keyword">();<br />    </span><span class="default">bar</span><span class="keyword">::</span><span class="default">testTwo</span><span class="keyword">();<br />  }<br />}<br /><br />echo </span><span class="string">"basic\n"</span><span class="keyword">;<br /></span><span class="default">foo</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">bar</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">();<br /><br />echo </span><span class="string">"basic without static declaration\n"</span><span class="keyword">;<br /></span><span class="default">foo</span><span class="keyword">::</span><span class="default">testTwo</span><span class="keyword">();<br /></span><span class="default">bar</span><span class="keyword">::</span><span class="default">testTwo</span><span class="keyword">();<br /><br />echo </span><span class="string">"in a class\n"</span><span class="keyword">;<br /></span><span class="default">$abc </span><span class="keyword">= new </span><span class="default">abc</span><span class="keyword">();<br /></span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /><br />echo </span><span class="string">"in a class without static declaration\n"</span><span class="keyword">;<br /></span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">testTwo</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />The result is:<br /><br />basic<br />string 'foo'<br />string 'bar'<br /><br />basic without static declaration<br />string 'foo'<br />string 'bar'<br /><br />in a class<br />string 'foo'<br />string 'bar'<br /><br />in a class without static declaration<br />string 'abc'<br />string 'abc'</span></code></div>
  </div>
 </div>
  <div class="note" id="89096">  <div class="votes">
    <div id="Vu89096">
    <a href="/manual/vote-note.php?id=89096&amp;page=function.get-called-class&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89096">
    <a href="/manual/vote-note.php?id=89096&amp;page=function.get-called-class&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89096" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#89096" class="name">
  <strong class="user"><em>a dot cudbard-bell at sussex dot ac dot uk</em></strong></a><a class="genanchor" href="#89096"> &para;</a><div class="date" title="2009-02-21 10:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89096">
<div class="phpcode"><code><span class="html">Here's a simple way of getting the inheritance tree of a class, no matter which class the function was actually defined in. Will work as a static function method too.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{
<br />    public function </span><span class="default">get_class_tree</span><span class="keyword">(){
<br />        </span><span class="default">$cur_class </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();
<br />        do {
<br />            echo </span><span class="default">$cur_class</span><span class="keyword">;            
<br />        }
<br />        while(</span><span class="default">$cur_class </span><span class="keyword">= </span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$cur_class</span><span class="keyword">));
<br />    }
<br />}
<br />
<br />class </span><span class="default">B </span><span class="keyword">{
<br />
<br />}
<br />
<br />class </span><span class="default">C </span><span class="keyword">{
<br />
<br />}
<br />
<br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">();
<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">get_class_tree</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />CBA</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-called-class&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-called-class.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.classobj.php">Classes/Object Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-alias.php" title="class_&#8203;alias">class_&#8203;alias</a>
                        </li>
                                                <li class="">
                            <a href="function.class-exists.php" title="class_&#8203;exists">class_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.enum-exists.php" title="enum_&#8203;exists">enum_&#8203;exists</a>
                        </li>
                                                <li class="current">
                            <a href="function.get-called-class.php" title="get_&#8203;called_&#8203;class">get_&#8203;called_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class.php" title="get_&#8203;class">get_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-methods.php" title="get_&#8203;class_&#8203;methods">get_&#8203;class_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.get-class-vars.php" title="get_&#8203;class_&#8203;vars">get_&#8203;class_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-classes.php" title="get_&#8203;declared_&#8203;classes">get_&#8203;declared_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-interfaces.php" title="get_&#8203;declared_&#8203;interfaces">get_&#8203;declared_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.get-declared-traits.php" title="get_&#8203;declared_&#8203;traits">get_&#8203;declared_&#8203;traits</a>
                        </li>
                                                <li class="">
                            <a href="function.get-mangled-object-vars.php" title="get_&#8203;mangled_&#8203;object_&#8203;vars">get_&#8203;mangled_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-object-vars.php" title="get_&#8203;object_&#8203;vars">get_&#8203;object_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-parent-class.php" title="get_&#8203;parent_&#8203;class">get_&#8203;parent_&#8203;class</a>
                        </li>
                                                <li class="">
                            <a href="function.interface-exists.php" title="interface_&#8203;exists">interface_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.is-a.php" title="is_&#8203;a">is_&#8203;a</a>
                        </li>
                                                <li class="">
                            <a href="function.is-subclass-of.php" title="is_&#8203;subclass_&#8203;of">is_&#8203;subclass_&#8203;of</a>
                        </li>
                                                <li class="">
                            <a href="function.method-exists.php" title="method_&#8203;exists">method_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.property-exists.php" title="property_&#8203;exists">property_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.trait-exists.php" title="trait_&#8203;exists">trait_&#8203;exists</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.autoload.php" title="_&#8203;_&#8203;autoload">_&#8203;_&#8203;autoload</a>
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
