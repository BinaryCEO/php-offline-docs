<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: foreach - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/control-structures.foreach.php">
 <link rel="shorturl" href="https://www.php.net/foreach">
 <link rel="alternate" href="https://www.php.net/foreach" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.control-structures.php">
 <link rel="prev" href="https://www.php.net/manual/en/control-structures.for.php">
 <link rel="next" href="https://www.php.net/manual/en/control-structures.break.php">

 <link rel="alternate" href="https://www.php.net/manual/en/control-structures.foreach.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/control-structures.foreach.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/control-structures.foreach.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/control-structures.foreach.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/control-structures.foreach.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/control-structures.foreach.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/control-structures.foreach.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/control-structures.foreach.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/control-structures.foreach.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/control-structures.foreach.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/control-structures.foreach.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="foreach" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: foreach - Manual" />
<meta name="twitter:description" content="foreach" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: foreach - Manual" />
<meta itemprop="description" content="foreach" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="foreach" />

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
        <a href="control-structures.break.php">
          break &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="control-structures.for.php">
          &laquo; for        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.control-structures.php'>Control Structures</a></li>      </ul>
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
            <option value='en/control-structures.foreach.php' selected="selected">English</option>
            <option value='de/control-structures.foreach.php'>German</option>
            <option value='es/control-structures.foreach.php'>Spanish</option>
            <option value='fr/control-structures.foreach.php'>French</option>
            <option value='it/control-structures.foreach.php'>Italian</option>
            <option value='ja/control-structures.foreach.php'>Japanese</option>
            <option value='pt_BR/control-structures.foreach.php'>Brazilian Portuguese</option>
            <option value='ru/control-structures.foreach.php'>Russian</option>
            <option value='tr/control-structures.foreach.php'>Turkish</option>
            <option value='uk/control-structures.foreach.php'>Ukrainian</option>
            <option value='zh/control-structures.foreach.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="control-structures.foreach" class="sect1">
 <h2 class="title">foreach</h2>
 <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p>
 <p class="para">
  The <code class="literal">foreach</code> construct provides an easy way to
  iterate over <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s and <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> objects.
  <code class="literal">foreach</code> will issue an error when used with
  a variable containing a different data type or with an uninitialized variable.
  <div class="informalexample">
   <p class="simpara">
    <code class="literal">foreach</code> can optionally get the <code class="literal">key</code> of each element:
   </p>
   <div class="example-contents">
<div class="cdata"><pre>
foreach (iterable_expression as $value) {
    statement_list
}

foreach (iterable_expression as $key =&gt; $value) {
    statement_list
}
</pre></div>
   </div>

  </div>
 </p>
 <p class="simpara">
  The first form traverses the iterable given by
  <code class="literal">iterable_expression</code>. On each iteration, the value of
  the current element is assigned to <code class="literal">$value</code>.
 </p>
 <p class="simpara">
  The second form will additionally assign the current element&#039;s key to
  the <code class="literal">$key</code> variable on each iteration.
 </p>
 <p class="simpara">
  Note that <code class="literal">foreach</code> does not modify the internal array
  pointer, which is used by functions such as <span class="function"><a href="function.current.php" class="function">current()</a></span>
  and <span class="function"><a href="function.key.php" class="function">key()</a></span>.
 </p>
 <p class="simpara">
  It is possible to
  <a href="language.oop5.iterations.php" class="link">customize object iteration</a>.
 </p>

 <div class="example" id="example-189">
  <p><strong>Example #1 Common <code class="literal">foreach</code> usages</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Example: value only */<br /></span><span style="color: #0000BB">$array </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">17</span><span style="color: #007700">];<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Current element of \$array: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">/* Example: key and value */<br /></span><span style="color: #0000BB">$array </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">"one" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"two" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"three" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"seventeen" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">17<br /></span><span style="color: #007700">];<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Key: </span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> =&gt; Value: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">/* Example: multi-dimensional key-value arrays */<br /></span><span style="color: #0000BB">$grid </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">$grid</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">"a"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$grid</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">"b"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$grid</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">] = </span><span style="color: #DD0000">"y"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$grid</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">"z"</span><span style="color: #007700">;<br /><br />foreach (</span><span style="color: #0000BB">$grid </span><span style="color: #007700">as </span><span style="color: #0000BB">$y </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$row</span><span style="color: #007700">) {<br />    foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$x </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Value at position x=</span><span style="color: #0000BB">$x</span><span style="color: #DD0000"> and y=</span><span style="color: #0000BB">$y</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">/* Example: dynamic arrays */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">) as </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   <code class="literal">foreach</code> does not support the ability to
   suppress error messages using the
   <a href="language.operators.errorcontrol.php" class="link"><code class="literal">@</code></a>.
  </p>
 </p></blockquote>

 <div class="sect2" id="control-structures.foreach.list">
  <h3 class="title">Unpacking nested arrays</h3>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p>
  <p class="para">
   It is possible to iterate over an array of arrays and unpack the nested array
   into loop variables by using either
   <a href="language.types.array.php#language.types.array.syntax.destructuring" class="link">array destructuring</a>
   via <code class="literal">[]</code> or by using the <span class="function"><a href="function.list.php" class="function">list()</a></span> language
   construct as the value.

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Please note that
     <a href="language.types.array.php#language.types.array.syntax.destructuring" class="link">array destructuring</a>
     via <code class="literal">[]</code> is only possible as of PHP 7.1.0
    </span>
   </p></blockquote>
  </p>

  <p class="para">
   <div class="informalexample">
    <p class="simpara">
     In both of the following examples <code class="literal">$a</code> will be set to
     the first element of the nested array and <code class="literal">$b</code> will
     contain the second element:
    </p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [<br />    [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">],<br />    [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">],<br />];<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as [</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">]) {<br />    echo </span><span style="color: #DD0000">"A: </span><span style="color: #0000BB">$a</span><span style="color: #DD0000">; B: </span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as list(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"A: </span><span style="color: #0000BB">$a</span><span style="color: #DD0000">; B: </span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">The above example will output:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
A: 1; B: 2
A: 3; B: 4
</pre></div>
    </div>
   </div>
  </p>

  <p class="para">
   When providing fewer variables than there are elements in the array,
   the remaining elements will be ignored.
   Similarly, elements can be skipped over by using a comma:
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [<br />    [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">],<br />    [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">],<br />];<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as [</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">]) {<br />    </span><span style="color: #FF8000">// Note that there is no $c here.<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as [, , </span><span style="color: #0000BB">$c</span><span style="color: #007700">]) {<br />    </span><span style="color: #FF8000">// Skipping over $a and $b<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$c</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">The above example will output:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
1 2
3 4
5
6
</pre></div>
    </div>
   </div>
  </p>

  <p class="para">
   A notice will be generated if there aren&#039;t enough array elements to fill
   the <span class="function"><a href="function.list.php" class="function">list()</a></span>:

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [<br />    [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">],<br />    [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">],<br />];<br /><br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as [</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">]) {<br />    echo </span><span style="color: #DD0000">"A: </span><span style="color: #0000BB">$a</span><span style="color: #DD0000">; B: </span><span style="color: #0000BB">$b</span><span style="color: #DD0000">; C: </span><span style="color: #0000BB">$c</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">The above example will output:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
Notice: Undefined offset: 2 in example.php on line 7
A: 1; B: 2; C:

Notice: Undefined offset: 2 in example.php on line 7
A: 3; B: 4; C:
</pre></div>
    </div>
   </div>
  </p>
 </div>

 <div class="sect2" id="control-structures.foreach.reference">
  <h3 class="title">foreach and references</h3>
  <p class="para">
   It is possible to directly modify array elements within a loop by preceding
   <code class="literal">$value</code> with <code class="literal">&amp;</code>.
   In that case the value will be assigned by
   <a href="language.references.php" class="link">reference</a>.
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$arr </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">$value </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// $arr is now [2, 4, 6, 8]<br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">); </span><span style="color: #FF8000">// break the reference with the last element<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Reference to a <code class="literal">$value</code> of the last array element
    remain even after the <code class="literal">foreach</code> loop. It is recommended
    to destroy these using <span class="function"><a href="function.unset.php" class="function">unset()</a></span>.
    Otherwise, the following behavior will occur:
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$arr </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">$value </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// $arr is now [2, 4, 6, 8]<br /><br />// without an unset($value), $value is still a reference to the last item: $arr[3]<br /><br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$arr </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// $arr[3] will be updated with each value from $arr...<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$key</span><span style="color: #007700">}</span><span style="color: #DD0000"> =&gt; </span><span style="color: #007700">{</span><span style="color: #0000BB">$value</span><span style="color: #007700">}</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">);<br />}<br /></span><span style="color: #FF8000">// ...until ultimately the second-to-last value is copied onto the last value<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">The above example will output:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
0 =&gt; 2 Array ( [0] =&gt; 2, [1] =&gt; 4, [2] =&gt; 6, [3] =&gt; 2 )
1 =&gt; 4 Array ( [0] =&gt; 2, [1] =&gt; 4, [2] =&gt; 6, [3] =&gt; 4 )
2 =&gt; 6 Array ( [0] =&gt; 2, [1] =&gt; 4, [2] =&gt; 6, [3] =&gt; 6 )
3 =&gt; 6 Array ( [0] =&gt; 2, [1] =&gt; 4, [2] =&gt; 6, [3] =&gt; 6 )
</pre></div>
    </div>
   </div>
  </div>
  <div class="example" id="example-190">
  <p><strong>Example #2 Iterate a constant array&#039;s values by reference</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach ([</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">] as &amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">$value </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><a href="language.types.array.php" class="link">array</a></li>
   <li><span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span></li>
   <li><a href="language.types.iterable.php" class="link">iterable</a></li>
   <li><span class="function"><a href="function.list.php" class="function">list()</a></span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/control-structures/foreach.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontrol-structures.foreach%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=control-structures.foreach&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.foreach.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127671">  <div class="votes">
    <div id="Vu127671">
    <a href="/manual/vote-note.php?id=127671&amp;page=control-structures.foreach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127671">
    <a href="/manual/vote-note.php?id=127671&amp;page=control-structures.foreach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127671" title="59% like this...">
    43
    </div>
  </div>
  <a href="#127671" class="name">
  <strong class="user"><em>Okafor Chiagozie</em></strong></a><a class="genanchor" href="#127671"> &para;</a><div class="date" title="2022-09-27 02:25"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127671">
<div class="phpcode"><code><span class="html">An easier way to unpack nested array elements<br /><br />$array = [<br />    [1, 2],<br />    [3, 4],<br />];<br /><br />foreach ($array as [$a, $b]) {<br />    echo "A: $a; B: $b\n";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="130299">  <div class="votes">
    <div id="Vu130299">
    <a href="/manual/vote-note.php?id=130299&amp;page=control-structures.foreach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130299">
    <a href="/manual/vote-note.php?id=130299&amp;page=control-structures.foreach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130299" title="58% like this...">
    3
    </div>
  </div>
  <a href="#130299" class="name">
  <strong class="user"><em>renatoaraujoleal at gmail dot com</em></strong></a><a class="genanchor" href="#130299"> &para;</a><div class="date" title="2025-05-20 01:32"><strong>4 months ago</strong></div>
  <div class="text" id="Hcom130299">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$array </span><span class="keyword">= [<br />    [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">],<br />    [</span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">],<br />];<br /><br />foreach (</span><span class="default">$array </span><span class="keyword">as [</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">]) {<br />    </span><span class="comment">// Observe que não existe $c aqui.<br />    </span><span class="keyword">echo </span><span class="string">"</span><span class="default">$a</span><span class="string"> </span><span class="default">$b</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br />foreach (</span><span class="default">$array </span><span class="keyword">as [, , </span><span class="default">$c</span><span class="keyword">]) {<br />    </span><span class="comment">// Pulando $a e $b<br />    </span><span class="keyword">echo </span><span class="string">"</span><span class="default">$c</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />I would like to correct this example above!<br />The answer of this algorithm is:<br /><br />1 2<br />3 4<br />3<br />6</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=control-structures.foreach&amp;repo=en&amp;redirect=https://www.php.net/manual/en/control-structures.foreach.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.control-structures.php">Control Structures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="control-structures.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.if.php" title="if">if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.else.php" title="else">else</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.elseif.php" title="elseif/else if">elseif/else if</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.alternative-syntax.php" title="Alternative syntax for control structures">Alternative syntax for control structures</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.while.php" title="while">while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.do.while.php" title="do-&#8203;while">do-&#8203;while</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.for.php" title="for">for</a>
                        </li>
                                                <li class="current">
                            <a href="control-structures.foreach.php" title="foreach">foreach</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.break.php" title="break">break</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.continue.php" title="continue">continue</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.switch.php" title="switch">switch</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.match.php" title="match">match</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.declare.php" title="declare">declare</a>
                        </li>
                                                <li class="">
                            <a href="function.return.php" title="return">return</a>
                        </li>
                                                <li class="">
                            <a href="function.require.php" title="require">require</a>
                        </li>
                                                <li class="">
                            <a href="function.include.php" title="include">include</a>
                        </li>
                                                <li class="">
                            <a href="function.require-once.php" title="require_&#8203;once">require_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="function.include-once.php" title="include_&#8203;once">include_&#8203;once</a>
                        </li>
                                                <li class="">
                            <a href="control-structures.goto.php" title="goto">goto</a>
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
