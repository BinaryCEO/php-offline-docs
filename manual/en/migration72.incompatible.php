<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward incompatible changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration72.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration72.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration72.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration72.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration72.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration72.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration72.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration72.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration72.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration72.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration72.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration72.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration72.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration72.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration72.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration72.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration72.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward incompatible changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward incompatible changes - Manual" />
<meta name="twitter:description" content="Backward incompatible changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward incompatible changes - Manual" />
<meta itemprop="description" content="Backward incompatible changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward incompatible changes" />

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
        <a href="migration72.deprecated.php">
          Deprecated features in PHP 7.2.x &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration72.constants.php">
          &laquo; New global constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration72.php'>Migrating from PHP 7.1.x to PHP 7.2.x</a></li>      </ul>
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
            <option value='en/migration72.incompatible.php' selected="selected">English</option>
            <option value='de/migration72.incompatible.php'>German</option>
            <option value='es/migration72.incompatible.php'>Spanish</option>
            <option value='fr/migration72.incompatible.php'>French</option>
            <option value='it/migration72.incompatible.php'>Italian</option>
            <option value='ja/migration72.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration72.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration72.incompatible.php'>Russian</option>
            <option value='tr/migration72.incompatible.php'>Turkish</option>
            <option value='uk/migration72.incompatible.php'>Ukrainian</option>
            <option value='zh/migration72.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration72.incompatible" class="sect1">
 <h2 class="title">Backward incompatible changes</h2>

 <div class="sect2" id="migration72.incompatible.number_format-no-neg-zero">
  <h3 class="title">Prevent <span class="function"><a href="function.number-format.php" class="function">number_format()</a></span> from returning negative zero</h3>

  <p class="para">
   Previously, it was possible for the <span class="function"><a href="function.number-format.php" class="function">number_format()</a></span>
   function to return <code class="literal">-0</code>. Whilst this is perfectly valid
   according to the IEEE 754 floating point specification, this oddity was not
   desirable for displaying formatted numbers in a human-readable form.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">number_format</span><span style="color: #007700">(-</span><span style="color: #0000BB">0.01</span><span style="color: #007700">)); </span><span style="color: #FF8000">// now outputs string(1) "0" instead of string(2) "-0"</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.incompatible.object-array-casts">
  <h3 class="title">Convert numeric keys in object and array casts</h3>

  <p class="para">
   Numeric keys are now better handled when casting arrays to objects and
   objects to arrays (either from explicit casting or by
   <span class="function"><a href="function.settype.php" class="function">settype()</a></span>).
  </p>

  <p class="para">
   This means that integer (or stringy integer) keys from arrays being casted
   to objects are now accessible:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// array to object<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= [</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= (object) </span><span style="color: #0000BB">$arr</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$obj</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;{</span><span style="color: #DD0000">'0'</span><span style="color: #007700">}, </span><span style="color: #FF8000">// now accessible<br />    </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">0</span><span style="color: #007700">} </span><span style="color: #FF8000">// now accessible<br /></span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
object(stdClass)#1 (1) {
  [&quot;0&quot;]=&gt;    // string key now, rather than integer key
  int(1)
}
int(1)
int(1)
</pre></div>
   </div>
  </div>

  <p class="para">
   And integer (or stringy integer) keys from objects being casted to arrays
   are now accessible:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// object to array<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new class {<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">0</span><span style="color: #007700">} = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    }<br />};<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= (array) </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$arr</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #FF8000">// now accessible<br />    </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'0'</span><span style="color: #007700">] </span><span style="color: #FF8000">// now accessible<br /></span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [0]=&gt;    // integer key now, rather than string key
  int(1)
}
int(1)
int(1)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration72.incompatible.no-null-to-get_class">
  <h3 class="title">Disallow passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to <span class="function"><a href="function.get-class.php" class="function">get_class()</a></span></h3>

  <p class="para">
   Previously, passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to the <span class="function"><a href="function.get-class.php" class="function">get_class()</a></span> function
   would output the name of the enclosing class. This behaviour has now been
   removed, where an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> will be output instead. To
   achieve the same behaviour as before, the argument should simply be omitted.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.warn-on-non-countable-types">
  <h3 class="title">Warn when counting non-countable types</h3>

  <p class="para">
   An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> will now be emitted when attempting to
   <span class="function"><a href="function.count.php" class="function">count()</a></span> non-countable types (this includes the
   <span class="function"><a href="function.sizeof.php" class="function">sizeof()</a></span> alias function).
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />var_dump</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">), </span><span style="color: #FF8000">// NULL is not countable<br />    </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #FF8000">// integers are not countable<br />    </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #DD0000">'abc'</span><span style="color: #007700">), </span><span style="color: #FF8000">// strings are not countable<br />    </span><span style="color: #0000BB">count</span><span style="color: #007700">(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">), </span><span style="color: #FF8000">// objects not implementing the Countable interface are not countable<br />    </span><span style="color: #0000BB">count</span><span style="color: #007700">([</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">]) </span><span style="color: #FF8000">// arrays are countable<br /></span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d
int(0)
int(1)
int(1)
int(1)
int(2)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration72.incompatible.hash-ext-to-objects">
  <h3 class="title">Move ext/hash from resources to objects</h3>

  <p class="para">
   As part of the long-term migration away from resources, the <a href="book.hash.php" class="link">Hash</a>
   extension has been updated to use objects instead of resources. The change should be
   seamless for PHP developers, except for where
   <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> checks have been made (which will need
   updating to <span class="function"><a href="function.is-object.php" class="function">is_object()</a></span> instead).
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.ssl-tls-defaults">
  <h3 class="title">Improve SSL/TLS defaults</h3>

  <p class="para">
   The following changes to the defaults have been made:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <code class="literal">tls://</code> now defaults to TLSv1.0 or TLSv1.1 or TLSv1.2
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="literal">ssl://</code> an alias of <code class="literal">tls://</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="literal">STREAM_CRYPTO_METHOD_TLS_*</code> constants default to TLSv1.0
     or TLSv1.1 + TLSv1.2, instead of TLSv1.0 only
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration72.incompatible.gettype-on-closed-resource">
  <h3 class="title"><span class="function"><a href="function.gettype.php" class="function">gettype()</a></span> return value on closed resources</h3>

  <p class="para">
   Previously, using <span class="function"><a href="function.gettype.php" class="function">gettype()</a></span> on a closed resource would
   return a string of <code class="literal">&quot;unknown type&quot;</code>. Now, a string of
   <code class="literal">&quot;resource (closed)&quot;</code> will be returned.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.is_object-on-incomplete_class">
  <h3 class="title"><span class="function"><a href="function.is-object.php" class="function">is_object()</a></span> and <span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span></h3>

  <p class="para">
   Previously, using <span class="function"><a href="function.is-object.php" class="function">is_object()</a></span> on the
   <span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span> class would return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   Now, <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> will be returned.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.undefined-constants">
  <h3 class="title">Promote the error level of undefined constants</h3>

  <p class="para">
   Unqualified references to undefined constants will now generate an
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> (instead of an <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>).
   In the next major version of PHP, they will generate
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.windows-support">
  <h3 class="title">Windows support</h3>

  <p class="para">
   The officially supported, minimum Windows versions are now Windows 7/Server
   2008 R2.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.trait-properties">
  <h3 class="title">Checks on default property values of traits</h3>

  <p class="para">
   Compatibility checks upon default trait property values will no longer
   perform casting.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.object-reserved-word">
  <h3 class="title"><code class="literal">object</code> for class names</h3>

  <p class="para">
   The <code class="literal">object</code> name was previously soft-reserved in PHP 7.0.
   This is now hard-reserved, prohibiting it from being used as a class, trait,
   or interface name.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.netware-support">
  <h3 class="title">NetWare support</h3>

  <p class="para">
   Support for NetWare has now been removed.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.array-unique">
  <h3 class="title"><span class="function"><a href="function.array-unique.php" class="function">array_unique()</a></span> with <strong><code><a href="array.constants.php#constant.sort-string">SORT_STRING</a></code></strong></h3>

  <p class="para">
   While <span class="function"><a href="function.array-unique.php" class="function">array_unique()</a></span> with <strong><code><a href="array.constants.php#constant.sort-string">SORT_STRING</a></code></strong>
   formerly copied the array and removed non-unique elements (without packing
   the array afterwards), now a new array is built by adding the
   unique elements. This can result in different numeric indexes.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.bcmod-and-floats">
  <h3 class="title"><span class="function"><a href="function.bcmod.php" class="function">bcmod()</a></span> changes with floats</h3>

  <p class="para">
   The <span class="function"><a href="function.bcmod.php" class="function">bcmod()</a></span> function no longer truncates fractional
   numbers to integers. As such, its behavior now follows
   <span class="function"><a href="function.fmod.php" class="function">fmod()</a></span>, rather than the <code class="literal">%</code> operator.
   For example <code class="literal">bcmod(&#039;4&#039;, &#039;3.5&#039;)</code> now returns
   <code class="literal">0.5</code> instead of <code class="literal">1</code>.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.hash-functions">
  <h3 class="title">Hashing functions and non-cryptographic hashes</h3>

  <p class="para">
   The <span class="function"><a href="function.hash-hmac.php" class="function">hash_hmac()</a></span>, <span class="function"><a href="function.hash-hmac-file.php" class="function">hash_hmac_file()</a></span>,
   <span class="function"><a href="function.hash-pbkdf2.php" class="function">hash_pbkdf2()</a></span>, and <span class="function"><a href="function.hash-init.php" class="function">hash_init()</a></span> (with
   <strong><code><a href="hash.constants.php#constant.hash-hmac">HASH_HMAC</a></code></strong>) functions no longer accept non-cryptographic
   hashes.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.json_decode-changes">
  <h3 class="title"><span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> function options</h3>

  <p class="para">
   The <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> function option,
   <strong><code><a href="json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></code></strong>, is now used if the second
   parameter (assoc) is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. Previously,
   <strong><code><a href="json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></code></strong> was always ignored.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.rand-mt_rand-output">
  <h3 class="title"><span class="function"><a href="function.rand.php" class="function">rand()</a></span> and <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> output</h3>

  <p class="para">
   Sequences generated by <span class="function"><a href="function.rand.php" class="function">rand()</a></span> and
   <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> for a specific seed may differ from PHP 7.1 on
   64-bit machines (due to the fixing of a modulo bias bug in the
   implementation).
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.sqlsafe_mode-ini-setting">
  <h3 class="title">Removal of <a href="ini.core.php#ini.sql.safe-mode" class="link"><code class="parameter">sql.safe_mode</code></a> ini setting</h3>

  <p class="para">
   The <code class="parameter">sql.safe_mode</code> ini setting has now been removed.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.date_parse_from_format">
  <h3 class="title">Changes to <span class="function"><a href="function.date-parse.php" class="function">date_parse()</a></span> and <span class="function"><a href="function.date-parse-from-format.php" class="function">date_parse_from_format()</a></span></h3>

  <p class="para">
   The <code class="literal">zone</code> element of the array returned by <span class="function"><a href="function.date-parse.php" class="function">date_parse()</a></span> and
   <span class="function"><a href="function.date-parse-from-format.php" class="function">date_parse_from_format()</a></span> represents seconds instead of
   minutes now, and its sign is inverted. For instance <code class="literal">-120</code>
   is now <code class="literal">7200</code>.
  </p>
 </div>

 <div class="sect2" id="migration72.incompatible.cookie-decode">
  <h3 class="title">Incoming Cookies</h3>

  <p class="para">
   As of PHP 7.2.34, the <em>names</em> of incoming cookies are no
   longer url-decoded for security reasons.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration72/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration72.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration72.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration72.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration72.php">Migrating from PHP 7.1.x to PHP 7.2.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration72.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration72.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration72.constants.php" title="New global constants">New global constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration72.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="">
                            <a href="migration72.deprecated.php" title="Deprecated features in PHP 7.2.x">Deprecated features in PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.other-changes.php" title="Other changes">Other changes</a>
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
