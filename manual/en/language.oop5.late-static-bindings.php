<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Late Static Bindings - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.late-static-bindings.php">
 <link rel="shorturl" href="https://www.php.net/oop5.late-static-bindings">
 <link rel="alternate" href="https://www.php.net/oop5.late-static-bindings" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.object-comparison.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.references.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.late-static-bindings.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.late-static-bindings.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.late-static-bindings.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.late-static-bindings.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.late-static-bindings.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.late-static-bindings.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.late-static-bindings.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.late-static-bindings.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.late-static-bindings.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.late-static-bindings.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.late-static-bindings.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Late Static Bindings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Late Static Bindings - Manual" />
<meta name="twitter:description" content="Late Static Bindings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Late Static Bindings - Manual" />
<meta itemprop="description" content="Late Static Bindings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Late Static Bindings" />

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
        <a href="language.oop5.references.php">
          Objects and references &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.object-comparison.php">
          &laquo; Comparing Objects        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.late-static-bindings.php' selected="selected">English</option>
            <option value='de/language.oop5.late-static-bindings.php'>German</option>
            <option value='es/language.oop5.late-static-bindings.php'>Spanish</option>
            <option value='fr/language.oop5.late-static-bindings.php'>French</option>
            <option value='it/language.oop5.late-static-bindings.php'>Italian</option>
            <option value='ja/language.oop5.late-static-bindings.php'>Japanese</option>
            <option value='pt_BR/language.oop5.late-static-bindings.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.late-static-bindings.php'>Russian</option>
            <option value='tr/language.oop5.late-static-bindings.php'>Turkish</option>
            <option value='uk/language.oop5.late-static-bindings.php'>Ukrainian</option>
            <option value='zh/language.oop5.late-static-bindings.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.late-static-bindings" class="sect1">
  <h2 class="title">Late Static Bindings</h2>
  <p class="para">
   PHP implements a feature called late static bindings which
   can be used to reference the called class in a context of static inheritance.
  </p>

  <p class="para">
   More precisely, late static bindings work by storing the class named in the
   last &quot;non-forwarding call&quot;. In case of static method calls, this is the
   class explicitly named (usually the one on the left of the
   <a href="language.oop5.paamayim-nekudotayim.php" class="link"><code class="literal">::</code></a>
   operator); in case of non static method calls, it is the class of the object. A
   &quot;forwarding call&quot; is a static one that is introduced by <code class="literal">self::</code>,
   <code class="literal">parent::</code>, <code class="literal">static::</code>, or, if going
   up in the class hierarchy, <span class="function"><a href="function.forward-static-call.php" class="function">forward_static_call()</a></span>.
   
   
   The function <span class="function"><a href="function.get-called-class.php" class="function">get_called_class()</a></span> can be used to retrieve
   a string with the name of the called class and <code class="literal">static::</code>
   introduces its scope.
  </p>
  
  <p class="para">
   This feature was named &quot;late static bindings&quot; with an internal perspective in
   mind. &quot;Late binding&quot; comes from the fact that <code class="literal">static::</code>
   will not be resolved using the class where the method is defined but it will
   rather be computed using runtime information.

   It was also called a &quot;static binding&quot; as it can be used for (but is not
   limited to) static method calls.
  </p>

  <div class="sect2" id="language.oop5.late-static-bindings.self">
   <h3 class="title">Limitations of <code class="literal">self::</code></h3>
   <p class="para">
    Static references to the current class like <code class="literal">self::</code> or
    <code class="literal">__CLASS__</code> are resolved using the class in which the
    function belongs, as in where it was defined:
   </p>
   <div class="example" id="example-363">
    <p><strong>Example #1 <code class="literal">self::</code> usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">who</span><span style="color: #007700">();<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
A
</pre></div>
    </div>
   </div>

  </div>

  <div class="sect2" id="language.oop5.late-static-bindings.usage">
   <h3 class="title">Late Static Bindings&#039; usage</h3>

   <p class="para">
    Late static bindings tries to solve that limitation by introducing a
    keyword that references the class that was initially called at runtime.
    Basically, a keyword that would allow referencing
    <code class="literal">B</code> from <code class="literal">test()</code> in the previous
    example. It was decided not to introduce a new keyword but rather use
    <code class="literal">static</code> that was already reserved.
   </p>

   <div class="example" id="example-364">
    <p><strong>Example #2 <code class="literal">static::</code> simple usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">;<br />    }<br /><br />    public static function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />    {<br />        static::</span><span style="color: #0000BB">who</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Here comes Late Static Bindings<br />    </span><span style="color: #007700">}<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
B
</pre></div>
    </div>
   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     In non-static contexts, the called class will be the class of the object
     instance. Since <code class="literal">$this-&gt;</code> will try to call private
     methods from the same scope, using <code class="literal">static::</code> may give
     different results. Another difference is that <code class="literal">static::</code>
     can only refer to static properties.
    </p>
   </p></blockquote>
   <div class="example" id="example-365">
    <p><strong>Example #3 <code class="literal">static::</code> usage in a non-static context</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    private function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"Success!\n"</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />        static::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">/* foo() will be copied to B, hence its scope will still be A and<br />    * the call be successful */<br /></span><span style="color: #007700">}<br /><br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    private function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #FF8000">/* Original method is replaced; the scope of the new one is C */<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">B</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">C</span><span style="color: #007700">();<br />try {<br />    </span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">Error $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Success!
Success!
Success!
Call to private method C::foo() from scope A
</pre></div>
    </div>
   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Late static bindings&#039; resolution will stop at a fully resolved static call
     with no fallback. On the other hand, static calls using keywords like
     <code class="literal">parent::</code> or <code class="literal">self::</code> will forward the
     calling information.
    </p>
    <div class="example" id="example-366">
     <p><strong>Example #4 Forwarding and non-forwarding calls</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        static::</span><span style="color: #0000BB">who</span><span style="color: #007700">();<br />    }<br /><br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">test</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">foo</span><span style="color: #007700">();<br />    }<br /><br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">extends </span><span style="color: #0000BB">B<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">C</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
A
C
C
</pre></div>
     </div>
    </div>
   </p></blockquote>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/late-static-bindings.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.late-static-bindings%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.late-static-bindings&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.late-static-bindings.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">29 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83502">  <div class="votes">
    <div id="Vu83502">
    <a href="/manual/vote-note.php?id=83502&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83502">
    <a href="/manual/vote-note.php?id=83502&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83502" title="81% like this...">
    170
    </div>
  </div>
  <a href="#83502" class="name">
  <strong class="user"><em>sergei at 2440media dot com</em></strong></a><a class="genanchor" href="#83502"> &para;</a><div class="date" title="2008-05-28 01:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83502">
<div class="phpcode"><code><span class="html">Finally we can implement some ActiveRecord methods:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">Model
<br /></span><span class="keyword">{
<br />    public static function </span><span class="default">find</span><span class="keyword">()
<br />    {
<br />        echo static::</span><span class="default">$name</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">Product </span><span class="keyword">extends </span><span class="default">Model
<br /></span><span class="keyword">{
<br />    protected static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Product'</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">Product</span><span class="keyword">::</span><span class="default">find</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output: 'Product'</span></code></div>
  </div>
 </div>
  <div class="note" id="114005">  <div class="votes">
    <div id="Vu114005">
    <a href="/manual/vote-note.php?id=114005&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114005">
    <a href="/manual/vote-note.php?id=114005&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114005" title="73% like this...">
    65
    </div>
  </div>
  <a href="#114005" class="name">
  <strong class="user"><em>mhh1422 at hotmail dot com</em></strong></a><a class="genanchor" href="#114005"> &para;</a><div class="date" title="2013-12-29 11:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114005">
<div class="phpcode"><code><span class="html">For abstract classes with static factory method, you can use the static keyword instead of self like the following:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">A</span><span class="keyword">{<br />    <br />    static function </span><span class="default">create</span><span class="keyword">(){<br /><br />        </span><span class="comment">//return new self();  //Fatal error: Cannot instantiate abstract class A<br /><br />        </span><span class="keyword">return new static(); </span><span class="comment">//this is the correct way<br /><br />    </span><span class="keyword">}<br />    <br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A</span><span class="keyword">{<br />}<br /><br /></span><span class="default">$obj</span><span class="keyword">=</span><span class="default">B</span><span class="keyword">::</span><span class="default">create</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122664">  <div class="votes">
    <div id="Vu122664">
    <a href="/manual/vote-note.php?id=122664&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122664">
    <a href="/manual/vote-note.php?id=122664&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122664" title="78% like this...">
    26
    </div>
  </div>
  <a href="#122664" class="name">
  <strong class="user"><em>MelkiySoft</em></strong></a><a class="genanchor" href="#122664"> &para;</a><div class="date" title="2018-04-26 09:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122664">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A <br /></span><span class="keyword">{<br />    <br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A <br /></span><span class="keyword">{<br />    public static function </span><span class="default">foo </span><span class="keyword">() {<br />        echo </span><span class="string">'new self: '</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(new </span><span class="default">self</span><span class="keyword">());<br />        echo </span><span class="string">'&lt;br&gt;new parent: '</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(new </span><span class="default">parent</span><span class="keyword">());<br />        echo </span><span class="string">'&lt;br&gt;new static: '</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(new static());<br />    }<br />}<br /><br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">B <br /></span><span class="keyword">{<br />    <br />}<br /><br /></span><span class="default">c</span><span class="keyword">::</span><span class="default">foo</span><span class="keyword">();<br />===========================<br /></span><span class="default">output</span><span class="keyword">:<br /></span><span class="comment">//new self: object(B)#1 (0) { }<br />//new parent: object(A)#1 (0) { }<br />//new static: object(C)#1 (0) { }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127859">  <div class="votes">
    <div id="Vu127859">
    <a href="/manual/vote-note.php?id=127859&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127859">
    <a href="/manual/vote-note.php?id=127859&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127859" title="80% like this...">
    3
    </div>
  </div>
  <a href="#127859" class="name">
  <strong class="user"><em>MikeT</em></strong></a><a class="genanchor" href="#127859"> &para;</a><div class="date" title="2022-10-25 11:52"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127859">
<div class="phpcode"><code><span class="html">Word of caution static::class doesn't always work as you might expect<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace NameSpace;<br /><br />class Class<br />{<br />    static function </span><span class="default">getClass</span><span class="keyword">()<br />    {<br />         return static::class;<br />    }<br />}<br /><br />Class::</span><span class="default">getClass</span><span class="keyword">()<br /></span><span class="default">?&gt;<br /></span>may return \NameSpace\Class or Class depending on context</span></code></div>
  </div>
 </div>
  <div class="note" id="126959">  <div class="votes">
    <div id="Vu126959">
    <a href="/manual/vote-note.php?id=126959&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126959">
    <a href="/manual/vote-note.php?id=126959&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126959" title="80% like this...">
    3
    </div>
  </div>
  <a href="#126959" class="name">
  <strong class="user"><em>aabweber at gmail dot com</em></strong></a><a class="genanchor" href="#126959"> &para;</a><div class="date" title="2022-03-27 07:05"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126959">
<div class="phpcode"><code><span class="html">Simplest way to understand is to run this script:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">ParentClass
<br /></span><span class="keyword">{
<br />    static </span><span class="default">$A </span><span class="keyword">= </span><span class="string">'ParentVariable'</span><span class="keyword">;
<br />
<br />    static function </span><span class="default">parentCall</span><span class="keyword">()
<br />    {
<br />        echo </span><span class="default">get_called_class</span><span class="keyword">() . </span><span class="string">', self: ' </span><span class="keyword">. </span><span class="default">self</span><span class="keyword">::</span><span class="default">$A </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="default">get_called_class</span><span class="keyword">() . </span><span class="string">', static: ' </span><span class="keyword">. static::</span><span class="default">$A </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"---\n"</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">ChildClass </span><span class="keyword">extends </span><span class="default">ParentClass
<br /></span><span class="keyword">{
<br />    static </span><span class="default">$A </span><span class="keyword">= </span><span class="string">'ChildVariable'</span><span class="keyword">;
<br />
<br />    static function </span><span class="default">childCall</span><span class="keyword">()
<br />    {
<br />        echo </span><span class="default">get_called_class</span><span class="keyword">() . </span><span class="string">', self: ' </span><span class="keyword">. </span><span class="default">self</span><span class="keyword">::</span><span class="default">$A </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="default">get_called_class</span><span class="keyword">() . </span><span class="string">', static: ' </span><span class="keyword">. static::</span><span class="default">$A </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="default">get_called_class</span><span class="keyword">() . </span><span class="string">', parent: ' </span><span class="keyword">. </span><span class="default">parent</span><span class="keyword">::</span><span class="default">$A </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"---\n"</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />echo </span><span class="string">"Late Static Bindings:\n"</span><span class="keyword">;
<br /></span><span class="default">ParentClass</span><span class="keyword">::</span><span class="default">parentCall</span><span class="keyword">();
<br /></span><span class="default">ChildClass</span><span class="keyword">::</span><span class="default">parentCall</span><span class="keyword">();
<br /></span><span class="default">ChildClass</span><span class="keyword">::</span><span class="default">childCall</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />----
<br />Output:
<br />
<br />Late Static Bindings:
<br />ParentClass, self: ParentVariable
<br />ParentClass, static: ParentVariable
<br />---
<br />ChildClass, self: ParentVariable
<br />ChildClass, static: ChildVariable
<br />---
<br />ChildClass, self: ChildVariable
<br />ChildClass, static: ChildVariable
<br />ChildClass, parent: ParentVariable</span></code></div>
  </div>
 </div>
  <div class="note" id="126385">  <div class="votes">
    <div id="Vu126385">
    <a href="/manual/vote-note.php?id=126385&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126385">
    <a href="/manual/vote-note.php?id=126385&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126385" title="75% like this...">
    8
    </div>
  </div>
  <a href="#126385" class="name">
  <strong class="user"><em>backnot</em></strong></a><a class="genanchor" href="#126385"> &para;</a><div class="date" title="2021-09-04 11:07"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126385">
<div class="phpcode"><code><span class="html">In the above example (#3) in order to make it work, you can change the child's method from 'private' to 'protected' (or public) and it will be called through 'static'.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    private function </span><span class="default">foo</span><span class="keyword">() {<br />        echo </span><span class="string">"success!\n"</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">test</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">();<br />        static::</span><span class="default">foo</span><span class="keyword">();<br />    }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />   </span><span class="comment">/* foo() will be copied to B, hence its scope will still be A and<br />    * the call be successful */<br /></span><span class="keyword">}<br /><br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    protected function </span><span class="default">foo</span><span class="keyword">() { </span><span class="comment">//note the change here<br />         </span><span class="keyword">echo </span><span class="string">'hello world!'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">();<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();   </span><span class="comment">// 'success' 'hello world'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117909">  <div class="votes">
    <div id="Vu117909">
    <a href="/manual/vote-note.php?id=117909&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117909">
    <a href="/manual/vote-note.php?id=117909&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117909" title="70% like this...">
    13
    </div>
  </div>
  <a href="#117909" class="name">
  <strong class="user"><em>sskaje at gmail dot com</em></strong></a><a class="genanchor" href="#117909"> &para;</a><div class="date" title="2015-08-31 04:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117909">
<div class="phpcode"><code><span class="html">static::class and self::class can be used to get current class name, <br />work under 5.5 and 5.6<br />failed in 5.3.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">a</span><span class="keyword">{ <br />    function </span><span class="default">d</span><span class="keyword">() {<br />        echo </span><span class="string">"=== self::class ===\n"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::class);<br />        echo </span><span class="string">"=== static::class ===\n"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(static::class);<br />    }<br />}<br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a</span><span class="keyword">{}<br />class </span><span class="default">c </span><span class="keyword">extends </span><span class="default">b</span><span class="keyword">{}<br /><br /></span><span class="default">a</span><span class="keyword">::</span><span class="default">d</span><span class="keyword">(); <br /></span><span class="default">b</span><span class="keyword">::</span><span class="default">d</span><span class="keyword">();<br /></span><span class="default">c</span><span class="keyword">::</span><span class="default">d</span><span class="keyword">();<br /><br /></span><span class="comment">/*<br />Output: <br /><br />=== self::class ===<br />string(1) "a"<br />=== static::class ===<br />string(1) "a"<br />=== self::class ===<br />string(1) "a"<br />=== static::class ===<br />string(1) "b"<br />=== self::class ===<br />string(1) "a"<br />=== static::class ===<br />string(1) "c"<br /><br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126862">  <div class="votes">
    <div id="Vu126862">
    <a href="/manual/vote-note.php?id=126862&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126862">
    <a href="/manual/vote-note.php?id=126862&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126862" title="71% like this...">
    3
    </div>
  </div>
  <a href="#126862" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126862"> &para;</a><div class="date" title="2022-02-19 09:02"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126862">
<div class="phpcode"><code><span class="html">class P_Class {<br />    public static $val = "Parent";<br />    public static function setVal($val){<br />        static::$val = $val;<br />    }<br />    public static function getVal(){<br />        return static::$val;<br />    }<br />}<br /><br />class C_Class extends P_Class{}<br /><br />C_Class::setVal("Child");<br />var_dump(C_Class::getVal());<br />var_dump(P_Class::getVal());<br /><br />Output:<br />string(5) "Child"<br />string(5) "Child"</span></code></div>
  </div>
 </div>
  <div class="note" id="83627">  <div class="votes">
    <div id="Vu83627">
    <a href="/manual/vote-note.php?id=83627&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83627">
    <a href="/manual/vote-note.php?id=83627&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83627" title="68% like this...">
    7
    </div>
  </div>
  <a href="#83627" class="name">
  <strong class="user"><em>tyler AT canfone [dot] COM</em></strong></a><a class="genanchor" href="#83627"> &para;</a><div class="date" title="2008-06-04 10:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83627">
<div class="phpcode"><code><span class="html">@ php at mikebird <br /><br />You can pass arguments to your constructor through your getInstance method, assuming you are running php5.<br /><br />        public static function getInstance($params = null) {<br />            if (self::$objInstance == null) {<br />                $strClass = static::getClass();<br />                self::$objInstance = new $strClass($params);<br />            }<br />            return self::$objInstance;<br />        }<br /><br />This would pass the params to your constructor. Love for php.</span></code></div>
  </div>
 </div>
  <div class="note" id="100138">  <div class="votes">
    <div id="Vu100138">
    <a href="/manual/vote-note.php?id=100138&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100138">
    <a href="/manual/vote-note.php?id=100138&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100138" title="66% like this...">
    8
    </div>
  </div>
  <a href="#100138" class="name">
  <strong class="user"><em>steven dot karas+nospam at gmail dot com</em></strong></a><a class="genanchor" href="#100138"> &para;</a><div class="date" title="2010-09-27 02:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100138">
<div class="phpcode"><code><span class="html">This function can be used as a workaround for late static binding in PHP &gt;= 5.1.0. There was another similar version of this function elsewhere, but used eval.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function &amp; </span><span class="default">static_var</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">)<br />{<br />    if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">))<br />    {<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />    }<br />    elseif ( ! </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">))<br />    {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Must be given an object or a class name'</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">$class </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />    return </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getStaticPropertyValue</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114666">  <div class="votes">
    <div id="Vu114666">
    <a href="/manual/vote-note.php?id=114666&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114666">
    <a href="/manual/vote-note.php?id=114666&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114666" title="61% like this...">
    11
    </div>
  </div>
  <a href="#114666" class="name">
  <strong class="user"><em>tamilps2 at gmail dot com</em></strong></a><a class="genanchor" href="#114666"> &para;</a><div class="date" title="2014-03-20 05:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114666">
<div class="phpcode"><code><span class="html">I have implemented enum using late static binding.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">IEnum </span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * Only concrete class should implement this function that should behave as<br />   * an enum.<br />   * <br />   * This method should return the __CLASS__ constant property of that class<br />   * <br />   * @return string __CLASS__<br />   */<br />  </span><span class="keyword">public static function </span><span class="default">who</span><span class="keyword">();<br />}<br /><br />abstract class </span><span class="default">Enum </span><span class="keyword">{<br /><br />  </span><span class="comment">/**<br />   * The selected value for the enum implementation<br />   * <br />   * @var mixed<br />   */<br />  </span><span class="keyword">public </span><span class="default">$value</span><span class="keyword">;<br />  <br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />  }<br />  <br />  </span><span class="comment">/**<br />   * The factory method that creates the corresponding enum class.<br />   * <br />   * @param integer $type<br />   * @return false|\class<br />   */<br />  </span><span class="keyword">public static function </span><span class="default">Factory</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">) {<br />    if (empty(</span><span class="default">$type</span><span class="keyword">)) {<br />      return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// use of late static binding to get the class.<br />    </span><span class="default">$class </span><span class="keyword">= static::</span><span class="default">who</span><span class="keyword">();<br />    <br />    if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, static::</span><span class="default">$_enums</span><span class="keyword">)) {<br />      return new </span><span class="default">$class</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br />  <br />  public function </span><span class="default">getValue</span><span class="keyword">() {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;<br />  }<br />  <br />  public static function </span><span class="default">getValues</span><span class="keyword">() {<br />    return </span><span class="default">array_keys</span><span class="keyword">(static::</span><span class="default">$_enums</span><span class="keyword">);<br />  }<br />  <br />  public function </span><span class="default">getString</span><span class="keyword">() {<br />    return static::</span><span class="default">$_enums</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">];<br />  }<br />  <br />  public function </span><span class="default">__toString</span><span class="keyword">() {<br />    return static::</span><span class="default">$_enums</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">];<br />  }<br /><br />}<br /><br />class </span><span class="default">Fruits </span><span class="keyword">extends </span><span class="default">Enum </span><span class="keyword">implements </span><span class="default">IEnum </span><span class="keyword">{<br /><br />      public static </span><span class="default">$_enums </span><span class="keyword">= array(<br />            </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'Apple'<br />            </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'Orange'<br />            </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'Banana'<br />      </span><span class="keyword">)<br /><br />      public static function </span><span class="default">who</span><span class="keyword">() {<br />             return </span><span class="default">__CLASS__</span><span class="keyword">;<br />      }<br />}<br /><br /></span><span class="comment">// Usage<br /><br />// user input from dropdown menu of fruits list<br /></span><span class="default">$input </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /><br /></span><span class="default">$fruit </span><span class="keyword">= </span><span class="default">Fruits</span><span class="keyword">::</span><span class="default">Factory</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br /><br /></span><span class="default">$fruit</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">(); </span><span class="comment">// 3<br /></span><span class="default">$fruit</span><span class="keyword">-&gt;</span><span class="default">getString</span><span class="keyword">(); </span><span class="comment">// Banana<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100812">  <div class="votes">
    <div id="Vu100812">
    <a href="/manual/vote-note.php?id=100812&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100812">
    <a href="/manual/vote-note.php?id=100812&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100812" title="61% like this...">
    10
    </div>
  </div>
  <a href="#100812" class="name">
  <strong class="user"><em>jakub dot lopuszanski at nasza-klasa dot pl</em></strong></a><a class="genanchor" href="#100812"> &para;</a><div class="date" title="2010-11-08 10:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100812">
<div class="phpcode"><code><span class="html">Suprisingly consts are also lazy bound even though you use self instead of static:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A</span><span class="keyword">{<br />  const </span><span class="default">X</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />  const </span><span class="default">Y</span><span class="keyword">=</span><span class="default">self</span><span class="keyword">::</span><span class="default">X</span><span class="keyword">;<br />}<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A</span><span class="keyword">{<br />  const </span><span class="default">X</span><span class="keyword">=</span><span class="default">1.0</span><span class="keyword">;<br />}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">B</span><span class="keyword">::</span><span class="default">Y</span><span class="keyword">); </span><span class="comment">// float(1.0)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98382">  <div class="votes">
    <div id="Vu98382">
    <a href="/manual/vote-note.php?id=98382&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98382">
    <a href="/manual/vote-note.php?id=98382&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98382" title="61% like this...">
    5
    </div>
  </div>
  <a href="#98382" class="name">
  <strong class="user"><em>adam dot prall at thinkingman dot com</em></strong></a><a class="genanchor" href="#98382"> &para;</a><div class="date" title="2010-06-11 09:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98382">
<div class="phpcode"><code><span class="html">Just a quick reminder to always check your syntax. While I love LSB, I thought it wasn't working:<br /><br />static::$sKey = not set<br /><br />…until I realized that I’d completely forgotten to make it a variable variable:<br /><br />$sKey = 'testStaticClassVarNameThatExistsInThisClassesScope';<br /><br />static::$$sKey = is set<br /><br />…of course this applies anywhere in PHP, but because of the (current) newness late static bindings, I’ve seen lots of code with this particular snafu in it from others.</span></code></div>
  </div>
 </div>
  <div class="note" id="85725">  <div class="votes">
    <div id="Vu85725">
    <a href="/manual/vote-note.php?id=85725&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85725">
    <a href="/manual/vote-note.php?id=85725&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85725" title="60% like this...">
    7
    </div>
  </div>
  <a href="#85725" class="name">
  <strong class="user"><em>kx</em></strong></a><a class="genanchor" href="#85725"> &para;</a><div class="date" title="2008-09-14 09:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85725">
<div class="phpcode"><code><span class="html">At least as of PHP 5.3.0a2 there's a function get_called_class(), which returns the class on which the static method is called.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">a </span><span class="keyword">{<br />  static public function </span><span class="default">test</span><span class="keyword">() {<br />    print </span><span class="default">get_called_class</span><span class="keyword">();<br />  }<br />}<br /><br />class </span><span class="default">b </span><span class="keyword">extends </span><span class="default">a </span><span class="keyword">{<br />}<br /><br /></span><span class="default">a</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">(); </span><span class="comment">// "a"<br /></span><span class="default">b</span><span class="keyword">::</span><span class="default">test</span><span class="keyword">(); </span><span class="comment">// "b"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83978">  <div class="votes">
    <div id="Vu83978">
    <a href="/manual/vote-note.php?id=83978&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83978">
    <a href="/manual/vote-note.php?id=83978&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83978" title="60% like this...">
    7
    </div>
  </div>
  <a href="#83978" class="name">
  <strong class="user"><em>Andrea Giammarchi</em></strong></a><a class="genanchor" href="#83978"> &para;</a><div class="date" title="2008-06-21 01:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83978">
<div class="phpcode"><code><span class="html">About static parameters, these work as expected.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$__CLASS__ </span><span class="keyword">= </span><span class="default">__CLASS__</span><span class="keyword">;<br />    public static function </span><span class="default">constructor</span><span class="keyword">(){<br />        return  static::</span><span class="default">$__CLASS__</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    protected static </span><span class="default">$__CLASS__ </span><span class="keyword">= </span><span class="default">__CLASS__</span><span class="keyword">;<br />}<br /><br />echo    </span><span class="default">B</span><span class="keyword">::</span><span class="default">constructor</span><span class="keyword">(); </span><span class="comment">// B<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93065">  <div class="votes">
    <div id="Vu93065">
    <a href="/manual/vote-note.php?id=93065&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93065">
    <a href="/manual/vote-note.php?id=93065&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93065" title="58% like this...">
    2
    </div>
  </div>
  <a href="#93065" class="name">
  <strong class="user"><em>joost dot t dot hart at planet dot nl</em></strong></a><a class="genanchor" href="#93065"> &para;</a><div class="date" title="2009-08-21 06:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93065">
<div class="phpcode"><code><span class="html">PHP5.3 unavailable, yet in the need for 'static', I did the following.<br /><br />Any objections? Personally I hate using the the eval() statement...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">mother<br /></span><span class="keyword">{<br />    function </span><span class="default">setStatic</span><span class="keyword">( </span><span class="default">$prop</span><span class="keyword">, </span><span class="default">$val </span><span class="keyword">) {<br />        </span><span class="comment">// After this, self:: refers to mother, yet next $class refers to...<br />        //<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">);<br />        eval( </span><span class="string">"</span><span class="default">$class</span><span class="string">::\$</span><span class="default">$prop</span><span class="string"> = \$</span><span class="default">$val</span><span class="string">;" </span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">child </span><span class="keyword">extends </span><span class="default">mother<br /></span><span class="keyword">{<br />    protected static </span><span class="default">$sProp</span><span class="keyword">;<br /><br />    function </span><span class="default">writer</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">setStatic</span><span class="keyword">( </span><span class="string">'sProp'</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">);<br />    }<br />    function </span><span class="default">reader</span><span class="keyword">()<br />    {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$sProp</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$c </span><span class="keyword">= new </span><span class="default">child</span><span class="keyword">();<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">writer</span><span class="keyword">( </span><span class="default">3 </span><span class="keyword">);<br />echo </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">reader</span><span class="keyword">(); </span><span class="comment">// 3<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109788">  <div class="votes">
    <div id="Vu109788">
    <a href="/manual/vote-note.php?id=109788&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109788">
    <a href="/manual/vote-note.php?id=109788&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109788" title="53% like this...">
    3
    </div>
  </div>
  <a href="#109788" class="name">
  <strong class="user"><em>Taai</em></strong></a><a class="genanchor" href="#109788"> &para;</a><div class="date" title="2012-08-21 10:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109788">
<div class="phpcode"><code><span class="html">I discovered an interesting thing. The class name string must be accessed directly from "flat" variable. Late static binding code that get's it's variable from array that is passed by class instance, throws an syntax error. Bug?<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br /><br />    public </span><span class="default">$metadata </span><span class="keyword">= array(</span><span class="string">'class' </span><span class="keyword">=&gt; </span><span class="string">'A'</span><span class="keyword">);<br /><br />    public static function </span><span class="default">numbers</span><span class="keyword">()<br />    {<br />        return </span><span class="default">123</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br /></span><span class="comment">// This throws an error<br />// Parse error: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM)<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">metadata</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">]::</span><span class="default">numbers</span><span class="keyword">() );<br /><br /></span><span class="comment">// Get the class name and store it in "flat" variable and now it's ok<br /></span><span class="default">$class_name </span><span class="keyword">= </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">metadata</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$class_name</span><span class="keyword">::</span><span class="default">numbers</span><span class="keyword">() );<br /><br /></span><span class="comment">// Other tests -------------------------------------------<br /><br /></span><span class="default">$arr </span><span class="keyword">=  array(</span><span class="string">'class' </span><span class="keyword">=&gt; </span><span class="string">'A'</span><span class="keyword">);<br /><br /></span><span class="comment">// This works too.<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">]::</span><span class="default">numbers</span><span class="keyword">() );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127364">  <div class="votes">
    <div id="Vu127364">
    <a href="/manual/vote-note.php?id=127364&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127364">
    <a href="/manual/vote-note.php?id=127364&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127364" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127364" class="name">
  <strong class="user"><em>5imun at github dot com</em></strong></a><a class="genanchor" href="#127364"> &para;</a><div class="date" title="2022-07-29 07:38"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127364">
<div class="phpcode"><code><span class="html">Example of setting up static property in child class from parent only if it isn't already defined, many people would expect that output will be "Foo Bar" but instead we get "Foo Foo":<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public static </span><span class="default">string $A</span><span class="keyword">;<br /><br />    public static function </span><span class="default">init</span><span class="keyword">() {<br />        return </span><span class="string">"Foo"</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">get</span><span class="keyword">() {<br />        if (!isset(static::</span><span class="default">$A</span><span class="keyword">)) {<br />            static::</span><span class="default">$A </span><span class="keyword">= static::</span><span class="default">init</span><span class="keyword">();<br />        }<br />        return static::</span><span class="default">$A</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Foo </span><span class="keyword">{<br />    public static function </span><span class="default">init</span><span class="keyword">() {<br />        return </span><span class="string">"Bar"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br /><br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();<br />echo </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />Foo<br />Foo</span></code></div>
  </div>
 </div>
  <div class="note" id="84525">  <div class="votes">
    <div id="Vu84525">
    <a href="/manual/vote-note.php?id=84525&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84525">
    <a href="/manual/vote-note.php?id=84525&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84525" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84525" class="name">
  <strong class="user"><em>sebastien at info-conseil dot fr</em></strong></a><a class="genanchor" href="#84525"> &para;</a><div class="date" title="2008-07-17 07:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84525">
<div class="phpcode"><code><span class="html">Here is a small workaround I made for the static inheritance issue. It's not perfect, but it works.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// BaseClass class will be extended by any class needing static inheritance workaroud<br /></span><span class="keyword">class </span><span class="default">BaseClass </span><span class="keyword">{<br />    </span><span class="comment">// Temporarily stores class name for Entry::getStatic() and Entry::setNextStatic()<br />    </span><span class="keyword">protected static </span><span class="default">$nextStatic </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Returns the real name of the class calling the method, not the one in which it was declared.<br />    </span><span class="keyword">protected static function </span><span class="default">getStatic</span><span class="keyword">() {<br />        </span><span class="comment">// If already stored<br />        </span><span class="keyword">if (</span><span class="default">self</span><span class="keyword">::</span><span class="default">$nextStatic</span><span class="keyword">) {<br />            </span><span class="comment">// Clean and return<br />            </span><span class="default">$class </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">$nextStatic</span><span class="keyword">;<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$nextStatic </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            return </span><span class="default">$class</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="comment">// Init<br />        </span><span class="default">$backTrace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        <br />        </span><span class="comment">// Walk through<br />        </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$backTrace</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="comment">// If a class is defined<br />            </span><span class="keyword">if (isset(</span><span class="default">$backTrace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">])) {<br />                </span><span class="comment">// Check if it is not a basic class<br />                </span><span class="keyword">if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$backTrace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">], array(</span><span class="string">'BaseClass'</span><span class="keyword">, </span><span class="string">'GenericClass'</span><span class="keyword">))) {<br />                    return </span><span class="default">$backTrace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">];<br />                } else {<br />                    </span><span class="default">$class </span><span class="keyword">= </span><span class="default">$backTrace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">];<br />                }<br />            } else {<br />                </span><span class="comment">// Returns last known class<br />                </span><span class="keyword">return </span><span class="default">$class</span><span class="keyword">;<br />            }<br />        }<br />        <br />        </span><span class="comment">// Default<br />        </span><span class="keyword">return </span><span class="default">$class</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// If a static method is called within global env, the previous method won't work, so we need to tell BaseClass which<br />    </span><span class="keyword">public static function </span><span class="default">setNextStatic</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />        </span><span class="comment">// Save value<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$nextStatic </span><span class="keyword">= </span><span class="default">$class</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Generic class declaring various static methods<br /></span><span class="keyword">class </span><span class="default">GenericClass </span><span class="keyword">extends </span><span class="default">BaseClass </span><span class="keyword">{<br />    public static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Generic'</span><span class="keyword">;<br />    <br />    public function </span><span class="default">getName</span><span class="keyword">() {<br />        </span><span class="default">$static </span><span class="keyword">= </span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">));<br />        return </span><span class="default">$static</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />    }<br />    <br />    public static function </span><span class="default">basicClassName</span><span class="keyword">() {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$name</span><span class="keyword">;<br />    }<br />    <br />    public static function </span><span class="default">staticClassName</span><span class="keyword">() {<br />        </span><span class="comment">// Get real name<br />        </span><span class="default">$staticName </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">getStatic</span><span class="keyword">();<br />        <br />        </span><span class="comment">// Return final class name<br />        </span><span class="default">$static </span><span class="keyword">= </span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="default">$staticName</span><span class="keyword">);<br />        return </span><span class="default">$static</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />    }<br />}<br /><br /></span><span class="comment">// Final class<br /></span><span class="keyword">class </span><span class="default">SomeClass </span><span class="keyword">extends </span><span class="default">GenericClass </span><span class="keyword">{<br />    public static </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Some'</span><span class="keyword">;<br />    <br />    public static function </span><span class="default">returnClassNameWith</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />        return </span><span class="default">$string</span><span class="keyword">.</span><span class="string">' : '</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">staticClassName</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="comment">// Instance call<br /><br />// Will print 'Some'<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">SomeClass</span><span class="keyword">();<br />echo </span><span class="string">'Name of $a : '</span><span class="keyword">.</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Static calls<br /><br />// Will print 'Generic'<br /></span><span class="keyword">echo </span><span class="string">'Basic call to SomeClass::$name : '</span><span class="keyword">.</span><span class="default">SomeClass</span><span class="keyword">::</span><span class="default">basicClassName</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Will print 'Generic'<br /></span><span class="keyword">echo </span><span class="string">'Global call to SomeClass::$name : '</span><span class="keyword">.</span><span class="default">SomeClass</span><span class="keyword">::</span><span class="default">staticClassName</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Will print 'Some'<br /></span><span class="default">BaseClass</span><span class="keyword">::</span><span class="default">setNextStatic</span><span class="keyword">(</span><span class="string">'SomeClass'</span><span class="keyword">);<br />echo </span><span class="string">'Global call to SomeClass::$name with pre-set : '</span><span class="keyword">.</span><span class="default">SomeClass</span><span class="keyword">::</span><span class="default">staticClassName</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Will print 'Some'<br /></span><span class="keyword">echo </span><span class="string">'Internal call to SomeClass::$name : '</span><span class="keyword">.</span><span class="default">SomeClass</span><span class="keyword">::</span><span class="default">returnClassNameWith</span><span class="keyword">(</span><span class="string">'This is a '</span><span class="keyword">).</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />There are two issues with this workaround :<br />- if you call a static method from global env, you need to declare the name of the class BEFORE calling the method, otherwise the workaround won't work (see 3rd and 4th examples). But I assume good programming makes few calls to static methods from global scope, so this shouldn't be long to fix if you use it.<br />- the workaround fails to access to private or protected static vars, as it uses get_class_vars(). If you find any better solution, let us know.<br /><br />With Php 5.3.0, upgrading will be easy : just delete the methods from the basic class, and search/replace any call to getStatic() and setNextStatic() by static:: - or one could use a selector on PHP_VERSION value to include either the BaseClass file with workaround or a BaseClass file using static::</span></code></div>
  </div>
 </div>
  <div class="note" id="83638">  <div class="votes">
    <div id="Vu83638">
    <a href="/manual/vote-note.php?id=83638&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83638">
    <a href="/manual/vote-note.php?id=83638&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83638" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83638" class="name">
  <strong class="user"><em>deadimp at gmail dot com</em></strong></a><a class="genanchor" href="#83638"> &para;</a><div class="date" title="2008-06-05 10:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83638">
<div class="phpcode"><code><span class="html">I think this will be pretty helpful too.<br />My question is, can just 'static' by itself resolve to the late static class?<br />I ask this because it could help in making new instances of the derived class, from a base class, by calling a derived class's static method instead of having to create a new instance of the derived class - or explicitly defining a 'getClass' method for each derived class.<br />Example:<br /><span class="default">&lt;?php<br /></span><span class="comment">//There isn't really any purpose for this example I posted<br />//Just a random implementation<br /></span><span class="keyword">class </span><span class="default">Base </span><span class="keyword">{<br />    static function </span><span class="default">useful</span><span class="keyword">() {<br />        </span><span class="comment">//Create a list of instances of the derived class<br />        </span><span class="default">$list</span><span class="keyword">=array();<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$list</span><span class="keyword">[]=new static(); </span><span class="comment">//Here's the point in question<br />        </span><span class="keyword">return </span><span class="default">$list</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">Derived </span><span class="keyword">extends </span><span class="default">Base </span><span class="keyword">{<br />    static function </span><span class="default">somethingElse</span><span class="keyword">() {<br />        </span><span class="comment">//...<br />        </span><span class="default">$list</span><span class="keyword">=static::</span><span class="default">useful</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>I'm not sure what kind of lexical / whatever-it's-called problems this would make with parsing. I don't think it could really collide with any contexts where you would use static otherwise - variable / method declaration.<br /><br />Even more so, is there a way to get the class's name to which the keywords 'self', 'parent', or 'static' refer?<br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Base </span><span class="keyword">{<br />    static function </span><span class="default">stuff</span><span class="keyword">() {<br />        echo </span><span class="string">"Self: "</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">);<br />        echo </span><span class="string">"Parent: "</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">parent</span><span class="keyword">);<br />        echo </span><span class="string">"Derived: "</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(static);<br />    }<br />}<br />class </span><span class="default">Derived </span><span class="keyword">extends </span><span class="default">Base </span><span class="keyword">{<br />    static function </span><span class="default">stuff</span><span class="keyword">() {<br />        static::</span><span class="default">stuff</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />I don't think there should be a massive bloat in the PHP core to support all of this, but it would be nice to take advantage of the dynamic nature of PHP.<br /><br />And yet another side note:<br />If you're in the instance-level scope in a method of a base, and you want to get a top-level static, here's an ugly workaround (from Thacmus /lib/core.php - see SVN repo):<br /><span class="default">&lt;?php<br /></span><span class="comment">//Get reference [?] to static from class<br />    //$class - Class name OR object (uses get_class())<br />    //$var - Not gonna say<br /></span><span class="keyword">function&amp; </span><span class="default">get_static</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">,</span><span class="default">$var</span><span class="keyword">) { </span><span class="comment">//'static_get'?<br />    </span><span class="keyword">if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">)) </span><span class="default">$class</span><span class="keyword">=</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />    if (!@</span><span class="default">property_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">,</span><span class="default">$var</span><span class="keyword">)) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Static property does not exist: </span><span class="default">$class</span><span class="string">::\$</span><span class="default">$var</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="comment">//debug_callstack(); //This is just a wrapper for debug_backtrace() for HTML<br />        </span><span class="keyword">return </span><span class="default">null</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//Store a reference so that the base data can be referred to<br />        //The code [[ return eval('return &amp;'.$class.'::$'.$var.';') ]] does not work - can not return references...<br />        //To establish the reference, use [[ $ref=&amp;get_static(...) ]]<br />    </span><span class="keyword">eval(</span><span class="string">'$temp=&amp;'</span><span class="keyword">.</span><span class="default">$class</span><span class="keyword">.</span><span class="string">'::$'</span><span class="keyword">.</span><span class="default">$var</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">); </span><span class="comment">//using<br />    </span><span class="keyword">return </span><span class="default">$temp</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82441">  <div class="votes">
    <div id="Vu82441">
    <a href="/manual/vote-note.php?id=82441&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82441">
    <a href="/manual/vote-note.php?id=82441&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82441" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82441" class="name">
  <strong class="user"><em>max at mastershrimp dot com</em></strong></a><a class="genanchor" href="#82441"> &para;</a><div class="date" title="2008-04-10 03:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82441">
<div class="phpcode"><code><span class="html">If you are using PHP &lt; 5.3.0 you might be interested in the following workaround for late static binding: <a href="http://de2.php.net/manual/de/function.get-class.php#77698" rel="nofollow" target="_blank">http://de2.php.net/manual/de/function.get-class.php#77698</a></span></code></div>
  </div>
 </div>
  <div class="note" id="85802">  <div class="votes">
    <div id="Vu85802">
    <a href="/manual/vote-note.php?id=85802&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85802">
    <a href="/manual/vote-note.php?id=85802&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85802" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#85802" class="name">
  <strong class="user"><em>gern_ at hotmail dot com</em></strong></a><a class="genanchor" href="#85802"> &para;</a><div class="date" title="2008-09-18 07:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85802">
<div class="phpcode"><code><span class="html">get_called_class for PHP &lt; 5.3
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Return called class name
<br /> *
<br /> * @author Michael Grenier
<br /> * @param int $i_level optional
<br /> * @return string
<br /> */
<br /></span><span class="keyword">function </span><span class="default">get_called_class </span><span class="keyword">(</span><span class="default">$i_level </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$a_debug </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();
<br />    </span><span class="default">$a_called </span><span class="keyword">= array();
<br />    </span><span class="default">$a_called_function </span><span class="keyword">= </span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i_level</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];
<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$a_debug</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">], array(</span><span class="string">'eval'</span><span class="keyword">)) || 
<br />            </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">], </span><span class="string">'eval()'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">)
<br />            continue;
<br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">], array(</span><span class="string">'__call'</span><span class="keyword">, </span><span class="string">'__callStatic'</span><span class="keyword">)))
<br />            </span><span class="default">$a_called_function </span><span class="keyword">= </span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];
<br />        if (</span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">] == </span><span class="default">$a_called_function</span><span class="keyword">)
<br />            </span><span class="default">$a_called </span><span class="keyword">= </span><span class="default">$a_debug</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    }
<br />    if (isset(</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">]) &amp;&amp; isset(</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">]))
<br />        return (string)</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">];
<br />    </span><span class="default">$i_line </span><span class="keyword">= (int)</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$a_lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">]));
<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"#([a-zA-Z0-9_]+)</span><span class="keyword">{</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">]}</span><span class="string">
<br />                </span><span class="keyword">{</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">]}</span><span class="string">( )*\(#"</span><span class="keyword">, </span><span class="default">$a_lines</span><span class="keyword">[</span><span class="default">$i_line</span><span class="keyword">], </span><span class="default">$a_match</span><span class="keyword">);
<br />    unset(</span><span class="default">$a_debug</span><span class="keyword">, </span><span class="default">$a_called</span><span class="keyword">, </span><span class="default">$a_called_function</span><span class="keyword">, </span><span class="default">$i_line</span><span class="keyword">, </span><span class="default">$a_lines</span><span class="keyword">);
<br />    if (</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$a_match</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)
<br />        </span><span class="default">$s_class </span><span class="keyword">= (string)</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$a_match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />    else
<br />        </span><span class="default">$s_class </span><span class="keyword">= (string)</span><span class="default">$a_called</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">];
<br />    if (</span><span class="default">$s_class </span><span class="keyword">== </span><span class="string">'self'</span><span class="keyword">)
<br />        return </span><span class="default">get_called_class</span><span class="keyword">(</span><span class="default">$i_level </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">);
<br />    return </span><span class="default">$s_class</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82727">  <div class="votes">
    <div id="Vu82727">
    <a href="/manual/vote-note.php?id=82727&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82727">
    <a href="/manual/vote-note.php?id=82727&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82727" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#82727" class="name">
  <strong class="user"><em>php at mikebird dot co dot uk</em></strong></a><a class="genanchor" href="#82727"> &para;</a><div class="date" title="2008-04-23 08:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82727">
<div class="phpcode"><code><span class="html">This should make life easier and neater if you have a project with a lot of singleton classes e.g.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">class </span><span class="default">Singleton </span><span class="keyword">{<br />        <br />        public static </span><span class="default">$objInstance</span><span class="keyword">;<br />    <br />        public static function &amp;</span><span class="default">getInstance</span><span class="keyword">() {<br />            if (</span><span class="default">self</span><span class="keyword">::</span><span class="default">$objInstance </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) {<br />                </span><span class="default">$strClass </span><span class="keyword">= static::</span><span class="default">getClass</span><span class="keyword">();<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">$objInstance </span><span class="keyword">= new </span><span class="default">$strClass</span><span class="keyword">;<br />            }<br />            return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$objInstance</span><span class="keyword">;<br />        }<br />        <br />        public static function </span><span class="default">getClass</span><span class="keyword">() {<br />            return </span><span class="default">__CLASS__</span><span class="keyword">;<br />        }<br />    <br />    }<br /><br />    class </span><span class="default">Foo </span><span class="keyword">extends </span><span class="default">Singleton </span><span class="keyword">{<br />        <br />        public </span><span class="default">$intBar</span><span class="keyword">;<br />        <br />        public function </span><span class="default">__construct</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">intBar </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        }<br />        <br />        public static function </span><span class="default">getClass</span><span class="keyword">() {<br />            return </span><span class="default">__CLASS__</span><span class="keyword">;<br />        }<br />        <br />    }<br />    <br />    <br />    </span><span class="default">$objFooTwo </span><span class="keyword">= </span><span class="default">Foo</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br />    </span><span class="default">$objFooTwo</span><span class="keyword">-&gt;</span><span class="default">intBar </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    <br />    </span><span class="default">$objFooOne </span><span class="keyword">= </span><span class="default">Foo</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br />    <br />    if (</span><span class="default">$objFooOne</span><span class="keyword">-&gt;</span><span class="default">intBar </span><span class="keyword">== </span><span class="default">$objFooTwo</span><span class="keyword">-&gt;</span><span class="default">intBar</span><span class="keyword">) {<br />        echo </span><span class="string">'it is a singleton'</span><span class="keyword">;<br />    } else {<br />        echo </span><span class="string">'it is not a singleton'</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />The above will output 'it is a singleton'. The obvious downfall to this method is not being able to give arguments to the constructor.</span></code></div>
  </div>
 </div>
  <div class="note" id="89946">  <div class="votes">
    <div id="Vu89946">
    <a href="/manual/vote-note.php?id=89946&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89946">
    <a href="/manual/vote-note.php?id=89946&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89946" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#89946" class="name">
  <strong class="user"><em>kenneth at kennethjorgensen dot com</em></strong></a><a class="genanchor" href="#89946"> &para;</a><div class="date" title="2009-03-30 02:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89946">
<div class="phpcode"><code><span class="html">Simple basic class which uses to get_called_class() to create singleton instances. A previous post by php at mikebird dot co dot uk explain how to do this, but the extended static variables require you to define them in child classes before they work.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">Singleton </span><span class="keyword">{<br />    private static </span><span class="default">$instances </span><span class="keyword">= array();<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();<br />        if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instances</span><span class="keyword">))<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Tried to construct  a second instance of class \"</span><span class="default">$class</span><span class="string">\""</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">getInstance</span><span class="keyword">() {<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_called_class</span><span class="keyword">();<br />        if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instances</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instances</span><span class="keyword">[</span><span class="default">$class</span><span class="keyword">] = new </span><span class="default">$class</span><span class="keyword">();<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$instances</span><span class="keyword">[</span><span class="default">$class</span><span class="keyword">];<br />    }<br />}<br /><br />class </span><span class="default">A </span><span class="keyword">extends </span><span class="default">Singleton </span><span class="keyword">{<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">Singleton </span><span class="keyword">{<br />}<br /><br /></span><span class="default">$a1 </span><span class="keyword">= </span><span class="default">A</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /></span><span class="default">$a2 </span><span class="keyword">= </span><span class="default">A</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /></span><span class="default">$b1 </span><span class="keyword">= </span><span class="default">B</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /></span><span class="default">$b2 </span><span class="keyword">= </span><span class="default">B</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br /><br />if (</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">) == </span><span class="string">"A" </span><span class="keyword">&amp;&amp;<br />    </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$a2</span><span class="keyword">) == </span><span class="string">"A" </span><span class="keyword">&amp;&amp;<br />    </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$b1</span><span class="keyword">) == </span><span class="string">"B" </span><span class="keyword">&amp;&amp;<br />    </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$b2</span><span class="keyword">) == </span><span class="string">"B" </span><span class="keyword">&amp;&amp;<br />    </span><span class="default">$a1 </span><span class="keyword">=== </span><span class="default">$a2 </span><span class="keyword">&amp;&amp;<br />    </span><span class="default">$b1 </span><span class="keyword">=== </span><span class="default">$b2</span><span class="keyword">)<br />    echo </span><span class="string">"All good\n"</span><span class="keyword">;<br />else<br />    echo </span><span class="string">"FAIL!\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />You probably noticed the use of self:: rather than static::, this is because we want the static variable to be private, and using static:: will not allow us to do that.</span></code></div>
  </div>
 </div>
  <div class="note" id="83917">  <div class="votes">
    <div id="Vu83917">
    <a href="/manual/vote-note.php?id=83917&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83917">
    <a href="/manual/vote-note.php?id=83917&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83917" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#83917" class="name">
  <strong class="user"><em>martinpauly [at] google mail [dot] com</em></strong></a><a class="genanchor" href="#83917"> &para;</a><div class="date" title="2008-06-18 05:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83917">
<div class="phpcode"><code><span class="html">will this work for variables as well?<br /><br />it would be great, if the following worked:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />protected static </span><span class="default">$table </span><span class="keyword">= </span><span class="string">"table"</span><span class="keyword">;<br />public static function </span><span class="default">connect</span><span class="keyword">(){<br />     </span><span class="comment">//do some stuff here<br />     </span><span class="keyword">echo static::</span><span class="default">$table</span><span class="keyword">;<br />     return static::</span><span class="default">getInstance</span><span class="keyword">(); </span><span class="comment">//function getInstance() now can return classes A or B depending on the context it was called<br /></span><span class="keyword">}<br />...<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />protected static </span><span class="default">$table </span><span class="keyword">= </span><span class="string">"subtable"</span><span class="keyword">;<br />...<br />}<br /><br /></span><span class="default">$table </span><span class="keyword">= </span><span class="default">B</span><span class="keyword">::</span><span class="default">connect</span><span class="keyword">(); </span><span class="comment">//hopefully the output will be: subtable<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101309">  <div class="votes">
    <div id="Vu101309">
    <a href="/manual/vote-note.php?id=101309&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101309">
    <a href="/manual/vote-note.php?id=101309&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101309" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#101309" class="name">
  <strong class="user"><em>jrfish dot x at gmail dot com</em></strong></a><a class="genanchor" href="#101309"> &para;</a><div class="date" title="2010-12-09 04:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101309">
<div class="phpcode"><code><span class="html">consider this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A
<br /></span><span class="keyword">{
<br />
<br /> </span><span class="comment">// some stuff....
<br />
<br />    </span><span class="keyword">public static function </span><span class="default">getInstance</span><span class="keyword">()
<br />    {
<br />        return new </span><span class="default">self</span><span class="keyword">();
<br />    }
<br />
<br />}
<br />
<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A
<br /></span><span class="keyword">{
<br />  </span><span class="comment">//stuff...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">$obj </span><span class="keyword">= </span><span class="default">B</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();
<br />
<br /></span><span class="comment">//versus
<br />
<br /></span><span class="keyword">class </span><span class="default">A
<br /></span><span class="keyword">{
<br />
<br /> </span><span class="comment">// some stuff....
<br />
<br />    </span><span class="keyword">public static function </span><span class="default">getInstance</span><span class="keyword">()
<br />    {
<br />        return new static();
<br />    }
<br />
<br />}
<br />
<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A
<br /></span><span class="keyword">{
<br />  </span><span class="comment">//stuff...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">$obj </span><span class="keyword">= </span><span class="default">B</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />also works the same way with static variables and constants</span></code></div>
  </div>
 </div>
  <div class="note" id="85591">  <div class="votes">
    <div id="Vu85591">
    <a href="/manual/vote-note.php?id=85591&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85591">
    <a href="/manual/vote-note.php?id=85591&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85591" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#85591" class="name">
  <strong class="user"><em>iamscrumpyjack</em></strong></a><a class="genanchor" href="#85591"> &para;</a><div class="date" title="2008-09-07 09:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85591">
<div class="phpcode"><code><span class="html">I have been dying to see this issue resolved. I'm very much looking forward to the production release of PHP 5.3...<br /><br />In my case I have been trying to do the following:<br /><br />class A {<br />  function __construct() {<br />    echo "I was called by " . static::__CLASS__;<br />  }<br />}<br /><br />class B extends A {<br />  function Foo() {<br />    echo "I am class " . __CLASS__;<br />  }<br />}<br /><br />$b = new B; // Should echo "I was called by B"<br />$b-&gt;Foo(); // Should echo "I am class B"<br /><br />At the moment I do the following workaround:<br /><br />class A {<br />  function __construct($child) {<br />    echo "I was called by " . $child;<br />  }<br />}<br /><br />class B extends A {<br />  function __construct() {<br />    parent::__construct(__CLASS__);<br />  }<br /><br />  function Foo() {<br />    echo "I am class " . __CLASS__;<br />  }<br />}<br /><br />$b = new B; // Echos "I was called by B"<br />$b-&gt;Foo(); // Echo "I am class B"<br /><br />As you can see, my current workaround has some overhead and is not as water-tight as the late static binding method.</span></code></div>
  </div>
 </div>
  <div class="note" id="84405">  <div class="votes">
    <div id="Vu84405">
    <a href="/manual/vote-note.php?id=84405&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84405">
    <a href="/manual/vote-note.php?id=84405&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84405" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#84405" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#84405"> &para;</a><div class="date" title="2008-07-12 12:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84405">
<div class="phpcode"><code><span class="html">Trying to recreate an inheritable static part for an object through a singleton pattern.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * "Inheritable static" for PHP &lt; 5.3<br /> * &lt;&lt; Library/Inheritable.php &gt;&gt;<br /> */<br /><br /></span><span class="keyword">abstract class </span><span class="default">Inheritable_Static </span><span class="keyword">extends </span><span class="default">Singleton<br /></span><span class="keyword">{<br />}<br /><br />abstract class </span><span class="default">Inheritable<br /></span><span class="keyword">{<br />    public static function </span><span class="default">getStatic</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Use an abstract Singleton<br />        </span><span class="keyword">return </span><span class="default">Singleton</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">(</span><span class="default">$className </span><span class="keyword">. </span><span class="string">'_Static'</span><span class="keyword">) ;<br />    }<br />    <br />    public function </span><span class="default">goStatic</span><span class="keyword">()<br />    {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">getStatic</span><span class="keyword">(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">)) ;<br />    }<br />}<br /><br /></span><span class="comment">/**<br /> * Abstract<br /> * &lt;&lt; Library/SayIt/Abstract.php &gt;&gt;<br /> */<br /><br /></span><span class="keyword">abstract class </span><span class="default">SayIt_Abstract_Static </span><span class="keyword">extends </span><span class="default">Inheritable_Static<br /></span><span class="keyword">{<br />    public </span><span class="default">$format </span><span class="keyword">;<br />}<br /><br />abstract class </span><span class="default">SayIt_Abstract </span><span class="keyword">extends </span><span class="default">Inheritable<br /></span><span class="keyword">{<br />    protected </span><span class="default">$_name </span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_name </span><span class="keyword">= </span><span class="default">$name </span><span class="keyword">;<br />    }<br />    <br />    final public function </span><span class="default">sayIt</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">goStatic</span><span class="keyword">()-&gt;</span><span class="default">format</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_name</span><span class="keyword">) . </span><span class="string">"\n" </span><span class="keyword">;<br />    }<br />    <br />}<br /><br /></span><span class="comment">/**<br /> * Concrete<br /> * &lt;&lt; Library/SayIt/Hello.php &gt;&gt;<br /> */<br /><br /></span><span class="keyword">class </span><span class="default">SayIt_Hello_Static </span><span class="keyword">extends </span><span class="default">SayIt_Abstract_Static<br /></span><span class="keyword">{<br />}<br /><br />class </span><span class="default">SayIt_Hello </span><span class="keyword">extends </span><span class="default">SayIt_Abstract<br /></span><span class="keyword">{<br />    public static function </span><span class="default">getStatic</span><span class="keyword">() { return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">getStatic</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">) ; }<br />}<br /><br /></span><span class="comment">/**<br /> * Test<br /> */<br /><br /></span><span class="default">SayIt_Hello</span><span class="keyword">::</span><span class="default">getStatic</span><span class="keyword">()-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="string">'Hello %s' </span><span class="keyword">;<br /><br /></span><span class="default">$w </span><span class="keyword">= new </span><span class="default">SayIt_Hello</span><span class="keyword">(</span><span class="string">'World'</span><span class="keyword">) ;<br /></span><span class="default">$j </span><span class="keyword">= new </span><span class="default">SayIt_Hello</span><span class="keyword">(</span><span class="string">'Joe'</span><span class="keyword">) ;<br /><br />echo </span><span class="default">$w</span><span class="keyword">-&gt;</span><span class="default">sayIt</span><span class="keyword">() ; </span><span class="comment">// Hello World<br /></span><span class="keyword">echo </span><span class="default">$j</span><span class="keyword">-&gt;</span><span class="default">sayIt</span><span class="keyword">() ; </span><span class="comment">// Hello Joe</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127363">  <div class="votes">
    <div id="Vu127363">
    <a href="/manual/vote-note.php?id=127363&amp;page=language.oop5.late-static-bindings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127363">
    <a href="/manual/vote-note.php?id=127363&amp;page=language.oop5.late-static-bindings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127363" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#127363" class="name">
  <strong class="user"><em>5imun at github dot com</em></strong></a><a class="genanchor" href="#127363"> &para;</a><div class="date" title="2022-07-29 07:14"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127363">
<div class="phpcode"><code><span class="html">You must be careful when getting static property of extended class from parent class, in example below you can see that using property_exists (method getA2) instead of isset with static keyword (method getA1) to check if the static property exist gives much more intuitive result:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public static </span><span class="default">string $A</span><span class="keyword">;<br /><br />    public static function </span><span class="default">init</span><span class="keyword">() {<br />        return static::class;<br />    }<br /><br />    public static function </span><span class="default">getA1</span><span class="keyword">() {<br />        if (!isset(static::</span><span class="default">$A</span><span class="keyword">)) {<br />            static::</span><span class="default">$A </span><span class="keyword">= static::class;<br />        }<br />        return static::</span><span class="default">$A</span><span class="keyword">;<br />    }<br />    <br />    public static function </span><span class="default">getA2</span><span class="keyword">() {<br />        if (</span><span class="default">property_exists</span><span class="keyword">(static::class, </span><span class="string">'A'</span><span class="keyword">)) {<br />            static::</span><span class="default">$A </span><span class="keyword">= static::class;<br />        }<br />        return static::</span><span class="default">$A</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Foo </span><span class="keyword">{}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">getA1</span><span class="keyword">();<br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">getA2</span><span class="keyword">();<br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">getA1</span><span class="keyword">();<br /><br /></span><span class="default">$bar </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();<br />echo </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">getA1</span><span class="keyword">();<br />echo </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">getA2</span><span class="keyword">();<br />echo </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">getA1</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />Foo<br />Foo<br />Foo<br /><br />Foo<br />Bar<br />Bar<br /><br />Notice how $bar-&gt;getA1() returns "Foo" instead of "Bar" that many people would expect to see.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.late-static-bindings&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.late-static-bindings.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
