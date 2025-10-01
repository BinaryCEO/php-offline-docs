<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Collecting Cycles - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.gc.collecting-cycles.php">
 <link rel="shorturl" href="https://www.php.net/gc.collecting-cycles">
 <link rel="alternate" href="https://www.php.net/gc.collecting-cycles" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.gc.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.gc.refcounting-basics.php">
 <link rel="next" href="https://www.php.net/manual/en/features.gc.performance-considerations.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.gc.collecting-cycles.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.gc.collecting-cycles.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.gc.collecting-cycles.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.gc.collecting-cycles.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.gc.collecting-cycles.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.gc.collecting-cycles.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.gc.collecting-cycles.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.gc.collecting-cycles.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.gc.collecting-cycles.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.gc.collecting-cycles.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.gc.collecting-cycles.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Collecting Cycles" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Collecting Cycles - Manual" />
<meta name="twitter:description" content="Collecting Cycles" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Collecting Cycles - Manual" />
<meta itemprop="description" content="Collecting Cycles" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Collecting Cycles" />

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
        <a href="features.gc.performance-considerations.php">
          Performance Considerations &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.gc.refcounting-basics.php">
          &laquo; Reference Counting Basics        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.gc.php'>Garbage Collection</a></li>      </ul>
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
            <option value='en/features.gc.collecting-cycles.php' selected="selected">English</option>
            <option value='de/features.gc.collecting-cycles.php'>German</option>
            <option value='es/features.gc.collecting-cycles.php'>Spanish</option>
            <option value='fr/features.gc.collecting-cycles.php'>French</option>
            <option value='it/features.gc.collecting-cycles.php'>Italian</option>
            <option value='ja/features.gc.collecting-cycles.php'>Japanese</option>
            <option value='pt_BR/features.gc.collecting-cycles.php'>Brazilian Portuguese</option>
            <option value='ru/features.gc.collecting-cycles.php'>Russian</option>
            <option value='tr/features.gc.collecting-cycles.php'>Turkish</option>
            <option value='uk/features.gc.collecting-cycles.php'>Ukrainian</option>
            <option value='zh/features.gc.collecting-cycles.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.gc.collecting-cycles" class="sect1">
   <h2 class="title">Collecting Cycles</h2>
   <p class="para">
    Traditionally, reference counting memory mechanisms, such as that used
    previously by PHP, fail to address circular reference memory leaks;
    however, as of 5.3.0, PHP implements the synchronous algorithm from the
    <a href="https://pages.cs.wisc.edu/~cymen/misc/interests/Bacon01Concurrent.pdf" class="link external">&raquo;&nbsp;Concurrent Cycle Collection in Reference Counted Systems</a>
    paper which addresses that issue.
   </p>
   <p class="para">
    A full explanation of how the algorithm works would be slightly beyond the
    scope of this section, but the basics are explained here. First of all,
    we have to establish a few ground rules. If a refcount is increased, it&#039;s
    still in use and therefore, not garbage. If the refcount is decreased and
    hits zero, the zval can be freed. This means that garbage cycles can only
    be created when a refcount argument is decreased to a non-zero value.
    Secondly, in a garbage cycle, it is possible to discover which parts are
    garbage by checking whether it is possible to decrease their refcount by
    one, and then checking which of the zvals have a refcount of zero.
   </p>
   <p class="para">
     <div class="mediaobject">
      
      <div class="imageobject">
       <img src="images/12f37b1c6963c1c5c18f30495416a197-gc-algorithm.png" alt="Garbage collection algorithm" width="614" height="814" />
      </div>
     </div>
   </p>
   <p class="para">
    To avoid having to call the checking of garbage cycles with every possible
    decrease of a refcount, the algorithm instead puts all possible roots
    (zvals) in the &quot;root buffer&quot; (marking them &quot;purple&quot;). It also makes sure
    that each possible garbage root ends up in the buffer only once. Only when
    the root buffer is full does the collection mechanism start for all the
    different zvals inside. See step A in the figure above.
   </p>
   <p class="para">
    In step B, the algorithm runs a depth-first search on all possible roots
    to decrease by one the refcounts of each zval it finds, making sure not to
    decrease a refcount on the same zval twice (by marking them as &quot;grey&quot;). In
    step C, the algorithm again runs a depth-first search from each root node,
    to check the refcount of each zval again. If it finds that the refcount is
    zero, the zval is marked &quot;white&quot; (blue in the figure). If it&#039;s larger than
    zero, it reverts the decreasing of the refcount by one with a depth-first
    search from that point on, and they are marked &quot;black&quot; again. In the last
    step (D), the algorithm walks over the root buffer removing the zval roots
    from there, and meanwhile, checks which zvals have been marked &quot;white&quot; in
    the previous step. Every zval marked as &quot;white&quot; will be freed.
   </p>
   <p class="para">
    Now that you have a basic understanding of how the algorithm works, we
    will look back at how this integrates with PHP. By default, PHP&#039;s garbage
    collector is turned on. There is, however, a <var class="filename">php.ini</var>
    setting that allows you to change this:
    <a href="info.configuration.php#ini.zend.enable-gc" class="link">zend.enable_gc</a>.
   </p>
   <p class="para">
    When the garbage collector is turned on, the cycle-finding algorithm as
    described above is executed whenever the root buffer runs full. The root
    buffer has a fixed size of 10,000 possible roots (although you can alter
    this by changing the <strong><code>GC_THRESHOLD_DEFAULT</code></strong> constant in
    <code class="literal">Zend/zend_gc.c</code> in the PHP source code, and re-compiling
    PHP). When the garbage collector is turned off, the cycle-finding
    algorithm will never run. However, possible roots will always be recorded
    in the root buffer, no matter whether the garbage collection mechanism has
    been activated with this configuration setting.
   </p>
   <p class="para">
    If the root buffer becomes full with possible roots while the garbage
    collection mechanism is turned off, further possible roots will simply not
    be recorded. Those possible roots that are not recorded will never be
    analyzed by the algorithm. If they were part of a circular reference
    cycle, they would never be cleaned up and would create a memory leak.
   </p>
   <p class="para">
    The reason why possible roots are recorded even if the mechanism has been
    disabled is because it&#039;s faster to record possible roots than to have to
    check whether the mechanism is turned on every time a possible root could
    be found. The garbage collection and analysis mechanism itself, however,
    can take a considerable amount of time.
   </p>
   <p class="para">
    Besides changing the <a href="info.configuration.php#ini.zend.enable-gc" class="link">zend.enable_gc</a> configuration
    setting, it is also possible to turn the garbage collecting mechanism on
    and off by calling <span class="function"><a href="function.gc-enable.php" class="function">gc_enable()</a></span> or
    <span class="function"><a href="function.gc-disable.php" class="function">gc_disable()</a></span> respectively.  Calling those functions has
    the same effect as turning on or off the mechanism with the configuration
    setting. It is also possible to force the collection of cycles even if the
    possible root buffer is not full yet. For this, you can use the
    <span class="function"><a href="function.gc-collect-cycles.php" class="function">gc_collect_cycles()</a></span> function. This function will return
    how many cycles were collected by the algorithm.
   </p>
   <p class="para">
    The rationale behind the ability to turn the mechanism on and off, and to
    initiate cycle collection yourself, is that some parts of your application
    could be highly time-sensitive. In those cases, you might not want the
    garbage collection mechanism to kick in. Of course, by turning off the
    garbage collection for certain parts of your application, you do risk
    creating memory leaks because some possible roots might not fit into the
    limited root buffer. Therefore, it is probably wise to call
    <span class="function"><a href="function.gc-collect-cycles.php" class="function">gc_collect_cycles()</a></span> just before you call
    <span class="function"><a href="function.gc-disable.php" class="function">gc_disable()</a></span> to free up the memory that could be lost
    through possible roots that are already recorded in the root buffer. This
    then leaves an empty buffer so that there is more space for storing
    possible roots while the cycle collecting mechanism is turned off.
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/gc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.gc.collecting-cycles%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.gc.collecting-cycles&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.collecting-cycles.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122544">  <div class="votes">
    <div id="Vu122544">
    <a href="/manual/vote-note.php?id=122544&amp;page=features.gc.collecting-cycles&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122544">
    <a href="/manual/vote-note.php?id=122544&amp;page=features.gc.collecting-cycles&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122544" title="64% like this...">
    17
    </div>
  </div>
  <a href="#122544" class="name">
  <strong class="user"><em>Dallas</em></strong></a><a class="genanchor" href="#122544"> &para;</a><div class="date" title="2018-03-25 09:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122544">
<div class="phpcode"><code><span class="html">After testing, breaking up memory intensive code into a separate function allows the garbage collection to work.<br /><br />For example the original code was like:-<br />while(true){<br />   //do memory intensive code<br />}<br /><br />can be turned into something like:-<br />function intensive($parameters){<br />   //do memory intensive code<br />}<br /><br />while(true){<br />   intensive($parameters);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119840">  <div class="votes">
    <div id="Vu119840">
    <a href="/manual/vote-note.php?id=119840&amp;page=features.gc.collecting-cycles&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119840">
    <a href="/manual/vote-note.php?id=119840&amp;page=features.gc.collecting-cycles&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119840" title="61% like this...">
    15
    </div>
  </div>
  <a href="#119840" class="name">
  <strong class="user"><em>Yousha dot A at Hotmail dot com</em></strong></a><a class="genanchor" href="#119840"> &para;</a><div class="date" title="2016-09-04 01:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119840">
<div class="phpcode"><code><span class="html">── Unused Objects ─── ─ In use Objects<br />↓                    ↓               ↓<br /> _____________________________________<br /> |□□□□□□□□□□□□□□□□□|██■■■■■■■■■■■■■■■■|<br /> |□□□□□□□□□□□□□□□□□|██■■■■■■■■■■■■■■■■|<br />¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯<br />          ▲                  ▲<br />     Unreferenced        Referenced<br />       Objects             Objects<br /><br />█ Memory leak</span></code></div>
  </div>
 </div>
  <div class="note" id="117165">  <div class="votes">
    <div id="Vu117165">
    <a href="/manual/vote-note.php?id=117165&amp;page=features.gc.collecting-cycles&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117165">
    <a href="/manual/vote-note.php?id=117165&amp;page=features.gc.collecting-cycles&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117165" title="55% like this...">
    10
    </div>
  </div>
  <a href="#117165" class="name">
  <strong class="user"><em>Yousha dot A at Hotmail dot com</em></strong></a><a class="genanchor" href="#117165"> &para;</a><div class="date" title="2015-04-24 07:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117165">
<div class="phpcode"><code><span class="html">Memory leak: meaning you keep a reference to it thus preventing the GC from collecting it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.gc.collecting-cycles&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.gc.collecting-cycles.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.gc.php">Garbage Collection</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.gc.refcounting-basics.php" title="Reference Counting Basics">Reference Counting Basics</a>
                        </li>
                                                <li class="current">
                            <a href="features.gc.collecting-cycles.php" title="Collecting Cycles">Collecting Cycles</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.performance-considerations.php" title="Performance Considerations">Performance Considerations</a>
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
