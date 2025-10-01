<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Generator syntax - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.generators.syntax.php">
 <link rel="shorturl" href="https://www.php.net/generators.syntax">
 <link rel="alternate" href="https://www.php.net/generators.syntax" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.generators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.generators.overview.php">
 <link rel="next" href="https://www.php.net/manual/en/language.generators.comparison.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.generators.syntax.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.generators.syntax.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.generators.syntax.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.generators.syntax.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.generators.syntax.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.generators.syntax.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.generators.syntax.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.generators.syntax.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.generators.syntax.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.generators.syntax.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.generators.syntax.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generator syntax" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Generator syntax - Manual" />
<meta name="twitter:description" content="Generator syntax" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Generator syntax - Manual" />
<meta itemprop="description" content="Generator syntax" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generator syntax" />

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
        <a href="language.generators.comparison.php">
          Comparing generators with Iterator objects &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.generators.overview.php">
          &laquo; Generators overview        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.generators.php'>Generators</a></li>      </ul>
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
            <option value='en/language.generators.syntax.php' selected="selected">English</option>
            <option value='de/language.generators.syntax.php'>German</option>
            <option value='es/language.generators.syntax.php'>Spanish</option>
            <option value='fr/language.generators.syntax.php'>French</option>
            <option value='it/language.generators.syntax.php'>Italian</option>
            <option value='ja/language.generators.syntax.php'>Japanese</option>
            <option value='pt_BR/language.generators.syntax.php'>Brazilian Portuguese</option>
            <option value='ru/language.generators.syntax.php'>Russian</option>
            <option value='tr/language.generators.syntax.php'>Turkish</option>
            <option value='uk/language.generators.syntax.php'>Ukrainian</option>
            <option value='zh/language.generators.syntax.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.generators.syntax" class="sect1">
  <h2 class="title">Generator syntax</h2>

  <p class="para">
   A generator function looks just like a normal function, except that instead
   of returning a value, a generator <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a>s as many values as it needs to.
   Any function containing <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> is a generator function.
  </p>

  <p class="para">
   When a generator function is called, it returns an object that can be
   iterated over. When you iterate over that object (for instance, via a
   <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> loop), PHP will call the object&#039;s iteration methods each time it needs a
   value, then saves the state of the generator when the generator yields a
   value so that it can be resumed when the next value is required.
  </p>

  <p class="para">
   Once there are no more values to be yielded, then the generator
   can simply return, and the calling code continues just as if an array has run
   out of values.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    A generator can return values, which can be retrieved using
    <span class="methodname"><a href="generator.getreturn.php" class="methodname">Generator::getReturn()</a></span>.
   </p>
  </p></blockquote>

  <div class="sect2" id="control-structures.yield">
   <h3 class="title"><strong class="command">yield</strong> keyword</h3>

   <p class="para">
    The heart of a generator function is the <strong class="command">yield</strong> keyword.
    In its simplest form, a yield statement looks much like a return
    statement, except that instead of stopping execution of the function and
    returning, yield instead provides a value to the code looping over the
    generator and pauses execution of the generator function.
   </p>

   <div class="example" id="example-423">
    <p><strong>Example #1 A simple example of yielding values</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">gen_one_to_three</span><span style="color: #007700">() {<br />    for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">3</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />        </span><span style="color: #FF8000">// Note that $i is preserved between yields.<br />        </span><span style="color: #007700">yield </span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$generator </span><span style="color: #007700">= </span><span style="color: #0000BB">gen_one_to_three</span><span style="color: #007700">();<br />foreach (</span><span style="color: #0000BB">$generator </span><span style="color: #007700">as </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
1
2
3
</pre></div>
    </div>
   </div>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Internally, sequential integer keys will be paired with the yielded
     values, just as with a non-associative array.
    </p>
   </p></blockquote>

   <div class="sect3" id="control-structures.yield.associative">
    <h4 class="title">Yielding values with keys</h4>

    <p class="para">
     PHP also supports associative arrays, and generators are no different. In
     addition to yielding simple values, as shown above, you can also yield a
     key at the same time.
    </p>

    <p class="para">
     The syntax for yielding a key/value pair is very similar to that used to
     define an associative array, as shown below.
    </p>

    <div class="example" id="example-424">
     <p><strong>Example #2 Yielding a key/value pair</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br /> * The input is semi-colon separated fields, with the first<br /> * field being an ID to use as a key.<br /> */<br /><br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= &lt;&lt;&lt;'EOF'<br /></span><span style="color: #DD0000">1;PHP;Likes dollar signs<br />2;Python;Likes whitespace<br />3;Ruby;Likes blocks<br /></span><span style="color: #007700">EOF;<br /><br />function </span><span style="color: #0000BB">input_parser</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">) {<br />    foreach (</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$input</span><span style="color: #007700">) as </span><span style="color: #0000BB">$line</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$fields </span><span style="color: #007700">= </span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">';'</span><span style="color: #007700">, </span><span style="color: #0000BB">$line</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$fields</span><span style="color: #007700">);<br /><br />        yield </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$fields</span><span style="color: #007700">;<br />    }<br />}<br /><br />foreach (</span><span style="color: #0000BB">input_parser</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">) as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$fields</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">:\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"    </span><span style="color: #0000BB">$fields</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"    </span><span style="color: #0000BB">$fields</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
1:
    PHP
    Likes dollar signs
2:
    Python
    Likes whitespace
3:
    Ruby
    Likes blocks
</pre></div>
     </div>
    </div>
   </div>

   <div class="sect3" id="control-structures.yield.null">
    <h4 class="title">Yielding null values</h4>

    <p class="para">
     Yield can be called without an argument to yield a <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value with an
     automatic key.
    </p>

    <div class="example" id="example-425">
     <p><strong>Example #3 Yielding <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>s</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">gen_three_nulls</span><span style="color: #007700">() {<br />    foreach (</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">) as </span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />        yield;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">iterator_to_array</span><span style="color: #007700">(</span><span style="color: #0000BB">gen_three_nulls</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
array(3) {
  [0]=&gt;
  NULL
  [1]=&gt;
  NULL
  [2]=&gt;
  NULL
}
</pre></div>
     </div>
    </div>
   </div>

   <div class="sect3" id="control-structures.yield.references">
    <h4 class="title">Yielding by reference</h4>

    <p class="para">
     Generator functions are able to yield values by reference as well as by
     value. This is done in the same way as
     <a href="functions.returning-values.php" class="link">returning references from functions</a>:
     by prepending an ampersand to the function name.
    </p>

    <div class="example" id="example-426">
     <p><strong>Example #4 Yielding values by reference</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function &amp;</span><span style="color: #0000BB">gen_reference</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /><br />    while (</span><span style="color: #0000BB">$value </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />        yield </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">/*<br /> * Note that we can change $number within the loop, and<br /> * because the generator is yielding references, $value<br /> * within gen_reference() changes.<br /> */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">gen_reference</span><span style="color: #007700">() as &amp;</span><span style="color: #0000BB">$number</span><span style="color: #007700">) {<br />    echo (--</span><span style="color: #0000BB">$number</span><span style="color: #007700">).</span><span style="color: #DD0000">'... '</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
2... 1... 0...
</pre></div>
     </div>
    </div>
   </div>

   <div class="sect3" id="control-structures.yield.from">
    <h4 class="title">Generator delegation via <strong class="command">yield from</strong></h4>

    <p class="para">
     Generator delegation allows you to yield values from another
     generator, <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> object, or
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span> by using the <strong class="command">yield from</strong> keyword.
     The outer generator will then yield all values from the inner generator,
     object, or array until that is no longer valid, after which execution
     will continue in the outer generator.
    </p>

    <p class="para">
     If a generator is used with <strong class="command">yield from</strong>, the
     <strong class="command">yield from</strong> expression will also return any value
     returned by the inner generator.
    </p>

    <div class="caution"><strong class="caution">Caution</strong>
     <h1 class="title">Storing into an array (e.g. with <span class="function"><a href="function.iterator-to-array.php" class="function">iterator_to_array()</a></span>)</h1>

      <p class="para">
       <strong class="command">yield from</strong> does not reset the keys. It preserves
       the keys returned by the <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> object, or
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. Thus some values may share a common key with another
       <strong class="command">yield</strong> or <strong class="command">yield from</strong>, which, upon
       insertion into an array, will overwrite former values with that key.
      </p>

      <p class="para">
       A common case where this matters is <span class="function"><a href="function.iterator-to-array.php" class="function">iterator_to_array()</a></span>
       returning a keyed array by default, leading to possibly unexpected results.
       <span class="function"><a href="function.iterator-to-array.php" class="function">iterator_to_array()</a></span> has a second parameter
       <code class="parameter">preserve_keys</code> which can be set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to collect
       all the values while ignoring the keys returned by the <span class="classname"><a href="class.generator.php" class="classname">Generator</a></span>.
      </p>

      <div class="example" id="example-427">
       <p><strong>Example #5 <strong class="command">yield from</strong> with <span class="function"><a href="function.iterator-to-array.php" class="function">iterator_to_array()</a></span></strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">inner</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// key 0<br />    </span><span style="color: #007700">yield </span><span style="color: #0000BB">2</span><span style="color: #007700">; </span><span style="color: #FF8000">// key 1<br />    </span><span style="color: #007700">yield </span><span style="color: #0000BB">3</span><span style="color: #007700">; </span><span style="color: #FF8000">// key 2<br /></span><span style="color: #007700">}<br />function </span><span style="color: #0000BB">gen</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #FF8000">// key 0<br />    </span><span style="color: #007700">yield from </span><span style="color: #0000BB">inner</span><span style="color: #007700">(); </span><span style="color: #FF8000">// keys 0-2<br />    </span><span style="color: #007700">yield </span><span style="color: #0000BB">4</span><span style="color: #007700">; </span><span style="color: #FF8000">// key 1<br /></span><span style="color: #007700">}<br /></span><span style="color: #FF8000">// pass false as second parameter to get an array [0, 1, 2, 3, 4]<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">iterator_to_array</span><span style="color: #007700">(</span><span style="color: #0000BB">gen</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

       <div class="example-contents"><p>The above example will output:</p></div>
       <div class="example-contents screen">
<div class="cdata"><pre>
array(3) {
  [0]=&gt;
  int(1)
  [1]=&gt;
  int(4)
  [2]=&gt;
  int(3)
}
</pre></div>
       </div>
      </div>
    </div>

    <div class="example" id="example-428">
     <p><strong>Example #6 Basic use of <strong class="command">yield from</strong></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">count_to_ten</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    yield from [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />    yield from new </span><span style="color: #0000BB">ArrayIterator</span><span style="color: #007700">([</span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">]);<br />    yield from </span><span style="color: #0000BB">seven_eight</span><span style="color: #007700">();<br />    yield </span><span style="color: #0000BB">9</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">seven_eight</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">7</span><span style="color: #007700">;<br />    yield from </span><span style="color: #0000BB">eight</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">eight</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br />}<br /><br />foreach (</span><span style="color: #0000BB">count_to_ten</span><span style="color: #007700">() as </span><span style="color: #0000BB">$num</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$num</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
1 2 3 4 5 6 7 8 9 10
</pre></div>
     </div>
    </div>

    <div class="example" id="example-429">
     <p><strong>Example #7 <strong class="command">yield from</strong> and return values</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">count_to_ten</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    yield from [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />    yield from new </span><span style="color: #0000BB">ArrayIterator</span><span style="color: #007700">([</span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">]);<br />    yield from </span><span style="color: #0000BB">seven_eight</span><span style="color: #007700">();<br />    return yield from </span><span style="color: #0000BB">nine_ten</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">seven_eight</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">7</span><span style="color: #007700">;<br />    yield from </span><span style="color: #0000BB">eight</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">eight</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">nine_ten</span><span style="color: #007700">() {<br />    yield </span><span style="color: #0000BB">9</span><span style="color: #007700">;<br />    return </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$gen </span><span style="color: #007700">= </span><span style="color: #0000BB">count_to_ten</span><span style="color: #007700">();<br />foreach (</span><span style="color: #0000BB">$gen </span><span style="color: #007700">as </span><span style="color: #0000BB">$num</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$num</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">$gen</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getReturn</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
1 2 3 4 5 6 7 8 9 10
</pre></div>
     </div>
    </div>
   </div>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/generators.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.generators.syntax%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.generators.syntax&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.generators.syntax.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111969">  <div class="votes">
    <div id="Vu111969">
    <a href="/manual/vote-note.php?id=111969&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111969">
    <a href="/manual/vote-note.php?id=111969&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111969" title="84% like this...">
    126
    </div>
  </div>
  <a href="#111969" class="name">
  <strong class="user"><em>Adil lhan (adilmedya at gmail dot com)</em></strong></a><a class="genanchor" href="#111969"> &para;</a><div class="date" title="2013-04-18 09:02"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111969">
<div class="phpcode"><code><span class="html">For example yield keyword with Fibonacci:<br /><br />function getFibonacci()<br />{<br />    $i = 0;<br />    $k = 1; //first fibonacci value<br />    yield $k;<br />    while(true)<br />    {<br />        $k = $i + $k;<br />        $i = $k - $i;<br />        yield $k;        <br />    }<br />}<br /><br />$y = 0;<br /><br />foreach(getFibonacci() as $fibonacci)<br />{<br />    echo $fibonacci . "\n";<br />    $y++;    <br />    if($y &gt; 30)<br />    {<br />        break; // infinite loop prevent<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="116577">  <div class="votes">
    <div id="Vu116577">
    <a href="/manual/vote-note.php?id=116577&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116577">
    <a href="/manual/vote-note.php?id=116577&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116577" title="88% like this...">
    49
    </div>
  </div>
  <a href="#116577" class="name">
  <strong class="user"><em>info at boukeversteegh dot nl</em></strong></a><a class="genanchor" href="#116577"> &para;</a><div class="date" title="2015-01-23 07:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116577">
<div class="phpcode"><code><span class="html">[This comment replaces my previous comment]<br /><br />You can use generators to do lazy loading of lists. You only compute the items that are actually used. However, when you want to load more items, how to cache the ones already loaded?<br /><br />Here is how to do cached lazy loading with a generator:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">CachedGenerator </span><span class="keyword">{<br />    protected </span><span class="default">$cache </span><span class="keyword">= [];<br />    protected </span><span class="default">$generator </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$generator</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">generator </span><span class="keyword">= </span><span class="default">$generator</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">generator</span><span class="keyword">() {<br />        foreach(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cache </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) yield </span><span class="default">$item</span><span class="keyword">;<br /><br />        while( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">generator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">() ) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cache</span><span class="keyword">[] = </span><span class="default">$current </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">generator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">generator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />            yield </span><span class="default">$current</span><span class="keyword">;<br />        }<br />    }<br />}<br />class </span><span class="default">Foobar </span><span class="keyword">{<br />    protected </span><span class="default">$loader </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    protected function </span><span class="default">loadItems</span><span class="keyword">() {<br />        foreach(</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">) {<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">200000</span><span class="keyword">);<br />            yield </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br /><br />    public function </span><span class="default">getItems</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">loader </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">loader </span><span class="keyword">?: new </span><span class="default">CachedGenerator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">loadItems</span><span class="keyword">());<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">loader</span><span class="keyword">-&gt;</span><span class="default">generator</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$f </span><span class="keyword">= new </span><span class="default">Foobar</span><span class="keyword">;<br /><br /></span><span class="comment"># First<br /></span><span class="keyword">print </span><span class="string">"First\n"</span><span class="keyword">;<br />foreach(</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getItems</span><span class="keyword">() as </span><span class="default">$i</span><span class="keyword">) {<br />    print </span><span class="default">$i </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    if( </span><span class="default">$i </span><span class="keyword">== </span><span class="default">5 </span><span class="keyword">) {<br />        break;<br />    }<br />}<br /><br /></span><span class="comment"># Second (items 1-5 are cached, 6-10 are loaded)<br /></span><span class="keyword">print </span><span class="string">"Second\n"</span><span class="keyword">;<br />foreach(</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getItems</span><span class="keyword">() as </span><span class="default">$i</span><span class="keyword">) {<br />    print </span><span class="default">$i </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment"># Third (all items are cached and returned instantly)<br /></span><span class="keyword">print </span><span class="string">"Third\n"</span><span class="keyword">;<br />foreach(</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getItems</span><span class="keyword">() as </span><span class="default">$i</span><span class="keyword">) {<br />    print </span><span class="default">$i </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118526">  <div class="votes">
    <div id="Vu118526">
    <a href="/manual/vote-note.php?id=118526&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118526">
    <a href="/manual/vote-note.php?id=118526&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118526" title="75% like this...">
    19
    </div>
  </div>
  <a href="#118526" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#118526"> &para;</a><div class="date" title="2015-12-21 09:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118526">
<div class="phpcode"><code><span class="html">If for some strange reason you need a generator that doesn't yield anything, an empty function doesn't work; the function needs a yield statement to be recognised as a generator.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gndn</span><span class="keyword">()<br />{<br />}<br /><br />foreach(</span><span class="default">gndn</span><span class="keyword">() as </span><span class="default">$it</span><span class="keyword">)<br />{<br />    echo </span><span class="string">'FNORD'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br /> But it's enough to have the yield syntactically present even if it's not reachable:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gndn</span><span class="keyword">()<br />{<br />    if(</span><span class="default">false</span><span class="keyword">) { yield; }<br />}<br /><br />foreach(</span><span class="default">gndn</span><span class="keyword">() as </span><span class="default">$it</span><span class="keyword">)<br />{<br />    echo </span><span class="string">'FNORD'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118316">  <div class="votes">
    <div id="Vu118316">
    <a href="/manual/vote-note.php?id=118316&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118316">
    <a href="/manual/vote-note.php?id=118316&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118316" title="71% like this...">
    12
    </div>
  </div>
  <a href="#118316" class="name">
  <strong class="user"><em>zilvinas at kuusas dot lt</em></strong></a><a class="genanchor" href="#118316"> &para;</a><div class="date" title="2015-11-16 09:18"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118316">
<div class="phpcode"><code><span class="html">Do not call generator functions directly, that won't work.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">my_transform</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    return </span><span class="default">$value </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">my_function</span><span class="keyword">(array </span><span class="default">$values</span><span class="keyword">) {<br />    foreach (</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />        yield </span><span class="default">my_transform</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$data </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">];<br /></span><span class="comment">// my_transform() won't be called inside my_function()<br /></span><span class="default">my_function</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="comment"># my_transform() will be called.<br /></span><span class="keyword">foreach (</span><span class="default">my_function</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) as </span><span class="default">$val</span><span class="keyword">) {<br />    </span><span class="comment">// ...<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115705">  <div class="votes">
    <div id="Vu115705">
    <a href="/manual/vote-note.php?id=115705&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115705">
    <a href="/manual/vote-note.php?id=115705&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115705" title="67% like this...">
    12
    </div>
  </div>
  <a href="#115705" class="name">
  <strong class="user"><em>christophe dot maymard at gmail dot com</em></strong></a><a class="genanchor" href="#115705"> &para;</a><div class="date" title="2014-09-11 04:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115705">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Example of class implementing IteratorAggregate using generator<br /><br /></span><span class="keyword">class </span><span class="default">ValueCollection </span><span class="keyword">implements </span><span class="default">IteratorAggregate<br /></span><span class="keyword">{<br />    private </span><span class="default">$items </span><span class="keyword">= array();<br />    <br />    public function </span><span class="default">addValue</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items</span><span class="keyword">[] = </span><span class="default">$item</span><span class="keyword">;<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">getIterator</span><span class="keyword">()<br />    {<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />            yield </span><span class="default">$item</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="comment">//Initializes a collection<br /></span><span class="default">$collection </span><span class="keyword">= new </span><span class="default">ValueCollection</span><span class="keyword">();<br /></span><span class="default">$collection<br />        </span><span class="keyword">-&gt;</span><span class="default">addValue</span><span class="keyword">(</span><span class="string">'A string'</span><span class="keyword">)<br />        -&gt;</span><span class="default">addValue</span><span class="keyword">(new </span><span class="default">stdClass</span><span class="keyword">())<br />        -&gt;</span><span class="default">addValue</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$collection </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117460">  <div class="votes">
    <div id="Vu117460">
    <a href="/manual/vote-note.php?id=117460&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117460">
    <a href="/manual/vote-note.php?id=117460&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117460" title="65% like this...">
    12
    </div>
  </div>
  <a href="#117460" class="name">
  <strong class="user"><em>Harun Yasar harunyasar at mail dot com</em></strong></a><a class="genanchor" href="#117460"> &para;</a><div class="date" title="2015-06-12 02:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117460">
<div class="phpcode"><code><span class="html">That is a simple fibonacci generator.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fibonacci</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">) {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$item</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        yield </span><span class="default">$a</span><span class="keyword">;<br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">- </span><span class="default">$a</span><span class="keyword">;<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment"># give me the first ten fibonacci numbers<br /></span><span class="default">$fibo </span><span class="keyword">= </span><span class="default">fibonacci</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />foreach (</span><span class="default">$fibo </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$value</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113636">  <div class="votes">
    <div id="Vu113636">
    <a href="/manual/vote-note.php?id=113636&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113636">
    <a href="/manual/vote-note.php?id=113636&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113636" title="62% like this...">
    8
    </div>
  </div>
  <a href="#113636" class="name">
  <strong class="user"><em>Shumeyko Dmitriy</em></strong></a><a class="genanchor" href="#113636"> &para;</a><div class="date" title="2013-11-08 07:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113636">
<div class="phpcode"><code><span class="html">This is little example of using generators with recursion. Used version of php is 5.5.5<br />[php]<br /><span class="default">&lt;?php<br />define </span><span class="keyword">(</span><span class="string">"DS"</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"ZERO_DEPTH"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"DEPTHLESS"</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"OPEN_SUCCESS"</span><span class="keyword">, </span><span class="default">True</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"END_OF_LIST"</span><span class="keyword">, </span><span class="default">False</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"CURRENT_DIR"</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">(</span><span class="string">"PARENT_DIR"</span><span class="keyword">, </span><span class="string">".."</span><span class="keyword">);<br /><br />function </span><span class="default">DirTreeTraversal</span><span class="keyword">(</span><span class="default">$DirName</span><span class="keyword">, </span><span class="default">$MaxDepth </span><span class="keyword">= </span><span class="default">DEPTHLESS</span><span class="keyword">, </span><span class="default">$CurrDepth </span><span class="keyword">= </span><span class="default">ZERO_DEPTH</span><span class="keyword">)<br />{<br />  if ((</span><span class="default">$MaxDepth </span><span class="keyword">=== </span><span class="default">DEPTHLESS</span><span class="keyword">) || (</span><span class="default">$CurrDepth </span><span class="keyword">&lt; </span><span class="default">$MaxDepth</span><span class="keyword">)) { <br />    </span><span class="default">$DirHandle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$DirName</span><span class="keyword">);<br />    if (</span><span class="default">$DirHandle </span><span class="keyword">!== </span><span class="default">OPEN_SUCCESS</span><span class="keyword">) { <br />      try{<br />        while ((</span><span class="default">$FileName </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$DirHandle</span><span class="keyword">)) !== </span><span class="default">END_OF_LIST</span><span class="keyword">) { </span><span class="comment">//read all file in directory<br />          </span><span class="keyword">if ((</span><span class="default">$FileName </span><span class="keyword">!= </span><span class="default">CURRENT_DIR</span><span class="keyword">) &amp;&amp; (</span><span class="default">$FileName </span><span class="keyword">!= </span><span class="default">PARENT_DIR</span><span class="keyword">)) {<br />            </span><span class="default">$FullName </span><span class="keyword">= </span><span class="default">$DirName</span><span class="keyword">.</span><span class="default">$FileName</span><span class="keyword">;<br />            yield </span><span class="default">$FullName</span><span class="keyword">;<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$FullName</span><span class="keyword">)) { </span><span class="comment">//include sub files and directories<br />              </span><span class="default">$SubTrav </span><span class="keyword">= </span><span class="default">DirTreeTraversal</span><span class="keyword">(</span><span class="default">$FullName</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">, </span><span class="default">$MaxDepth</span><span class="keyword">, (</span><span class="default">$CurrDepth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));<br />              foreach(</span><span class="default">$SubTrav </span><span class="keyword">as </span><span class="default">$SubItem</span><span class="keyword">) yield </span><span class="default">$SubItem</span><span class="keyword">;<br />            }<br />          }<br />        }<br />      } finally {<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$DirHandle</span><span class="keyword">);<br />      }<br />    }<br />  }<br />}<br /><br /></span><span class="default">$PathTrav </span><span class="keyword">= </span><span class="default">DirTreeTraversal</span><span class="keyword">(</span><span class="string">"C:"</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />print </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br />foreach(</span><span class="default">$PathTrav </span><span class="keyword">as </span><span class="default">$FileName</span><span class="keyword">) </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%s\n"</span><span class="keyword">, </span><span class="default">$FileName</span><span class="keyword">);<br />print </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />[/</span><span class="default">php</span><span class="keyword">]</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129678">  <div class="votes">
    <div id="Vu129678">
    <a href="/manual/vote-note.php?id=129678&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129678">
    <a href="/manual/vote-note.php?id=129678&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129678" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129678" class="name">
  <strong class="user"><em>harl at gmail dot com</em></strong></a><a class="genanchor" href="#129678"> &para;</a><div class="date" title="2024-07-30 11:59"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129678">
<div class="phpcode"><code><span class="html">If you mix yielding values with keys and yielding values without keys, the result is the same as adding values to an array with or without keys.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">gen</span><span class="keyword">() {<br />    yield </span><span class="string">'a'</span><span class="keyword">;<br />    yield </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">;<br />    yield </span><span class="string">'c'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= </span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">gen</span><span class="keyword">());<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The result is an array [0 =&gt; 'a', 4 =&gt; 'b', 5 =&gt; 'c'], just as if you had written<br /><br /><span class="default">&lt;?php<br />$t </span><span class="keyword">= [];<br /></span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$t</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="string">'b'</span><span class="keyword">;<br /></span><span class="default">$t</span><span class="keyword">[] = </span><span class="string">'c'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />With the key given to 'c' being incremented from the previous numeric index.</span></code></div>
  </div>
 </div>
  <div class="note" id="123983">  <div class="votes">
    <div id="Vu123983">
    <a href="/manual/vote-note.php?id=123983&amp;page=language.generators.syntax&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123983">
    <a href="/manual/vote-note.php?id=123983&amp;page=language.generators.syntax&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123983" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123983" class="name">
  <strong class="user"><em>christianggimenez at gmail dot com</em></strong></a><a class="genanchor" href="#123983"> &para;</a><div class="date" title="2019-06-24 09:36"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123983">
<div class="phpcode"><code><span class="html">Module list of a number from 1 to 100.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">list_of_modulo</span><span class="keyword">(){<br /><br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br /><br />        if((</span><span class="default">$i </span><span class="keyword">% </span><span class="default">2</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">){<br />            yield </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="default">$modulos </span><span class="keyword">= </span><span class="default">list_of_modulo</span><span class="keyword">();<br /><br />foreach(</span><span class="default">$modulos </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br />    <br />    echo </span><span class="string">"</span><span class="default">$value</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.generators.syntax&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.generators.syntax.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.generators.php">Generators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.generators.overview.php" title="Generators overview">Generators overview</a>
                        </li>
                                                <li class="current">
                            <a href="language.generators.syntax.php" title="Generator syntax">Generator syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.comparison.php" title="Comparing generators with Iterator objects">Comparing generators with Iterator objects</a>
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
