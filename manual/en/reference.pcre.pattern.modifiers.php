<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Possible modifiers in regex patterns - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pcre.pattern.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.performance.php">
 <link rel="next" href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reference.pcre.pattern.modifiers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reference.pcre.pattern.modifiers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reference.pcre.pattern.modifiers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reference.pcre.pattern.modifiers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reference.pcre.pattern.modifiers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reference.pcre.pattern.modifiers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reference.pcre.pattern.modifiers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reference.pcre.pattern.modifiers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reference.pcre.pattern.modifiers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reference.pcre.pattern.modifiers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Pattern Modifiers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Possible modifiers in regex patterns - Manual" />
<meta name="twitter:description" content="Pattern Modifiers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Possible modifiers in regex patterns - Manual" />
<meta itemprop="description" content="Pattern Modifiers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Pattern Modifiers" />

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
        <a href="reference.pcre.pattern.differences.php">
          Differences From Perl &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.performance.php">
          &laquo; Performance        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      </ul>
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
            <option value='en/reference.pcre.pattern.modifiers.php' selected="selected">English</option>
            <option value='de/reference.pcre.pattern.modifiers.php'>German</option>
            <option value='es/reference.pcre.pattern.modifiers.php'>Spanish</option>
            <option value='fr/reference.pcre.pattern.modifiers.php'>French</option>
            <option value='it/reference.pcre.pattern.modifiers.php'>Italian</option>
            <option value='ja/reference.pcre.pattern.modifiers.php'>Japanese</option>
            <option value='pt_BR/reference.pcre.pattern.modifiers.php'>Brazilian Portuguese</option>
            <option value='ru/reference.pcre.pattern.modifiers.php'>Russian</option>
            <option value='tr/reference.pcre.pattern.modifiers.php'>Turkish</option>
            <option value='uk/reference.pcre.pattern.modifiers.php'>Ukrainian</option>
            <option value='zh/reference.pcre.pattern.modifiers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reference.pcre.pattern.modifiers" class="article">
 <h1 class="title">Pattern Modifiers</h1>

 
  <p class="para">
   The current possible PCRE modifiers are listed below.  The names
   in parentheses refer to internal PCRE names for these modifiers.
   Spaces and newlines are ignored in modifiers, other characters cause error.
  </p>
  <p class="para">
   <blockquote class="blockquote">
    <dl>
     
      <dt><em>i</em> (<code class="literal">PCRE_CASELESS</code>)</dt>
      <dd>
       <span class="simpara">
        If this modifier is set, letters in the pattern match both
        upper and lower case letters.
       </span>
      </dd>
     
     
      <dt><em>m</em> (<code class="literal">PCRE_MULTILINE</code>)</dt>
      <dd>
       <span class="simpara">
        By default, PCRE treats the subject string as consisting of a
        single &quot;line&quot; of characters (even if it actually contains
        several newlines). The &quot;start of line&quot; metacharacter (^)
        matches only at the start of the string, while the &quot;end of
         line&quot; metacharacter ($) matches only at the end of the
        string, or before a terminating newline (unless
        <em>D</em> modifier is set). This is the same as
        Perl.
       </span>
       <span class="simpara">
        When this modifier is set, the &quot;start of line&quot; and &quot;end of
        line&quot; constructs match immediately following or immediately
        before any newline in the subject string, respectively, as
        well as at the very start and end. This is equivalent to
        Perl&#039;s /m modifier. If there are no &quot;\n&quot; characters in a
        subject string, or no occurrences of ^ or $ in a pattern,
        setting this modifier has no effect.
       </span>
      </dd>
     
     
      <dt><em>s</em> (<code class="literal">PCRE_DOTALL</code>)</dt>
      <dd>
       <span class="simpara">
        If this modifier is set, a dot metacharacter in the pattern
        matches all characters, including newlines. Without it,
        newlines are excluded. This modifier is equivalent to Perl&#039;s
        /s modifier.  A negative class such as [^a] always matches a
        newline character, independent of the setting of this
        modifier.
       </span>
      </dd>
     
     
      <dt><em>x</em> (<code class="literal">PCRE_EXTENDED</code>)</dt>
      <dd>
       <span class="simpara">
        If this modifier is set, whitespace data characters in the
        pattern are totally ignored except when escaped or inside a
        character class, and characters between an unescaped #
        outside a character class and the next newline character,
        inclusive, are also ignored. This is equivalent to Perl&#039;s /x
        modifier, and makes it possible to include commentary inside
        complicated patterns. Note, however, that this applies only
        to data characters. Whitespace characters may never appear
        within special character sequences in a pattern, for example
        within the sequence (?( which introduces a conditional
        subpattern.
       </span>
      </dd>
     
     
      <dt><em>A</em> (<code class="literal">PCRE_ANCHORED</code>)</dt>
      <dd>
       <span class="simpara">
        If this modifier is set, the pattern is forced to be
        &quot;anchored&quot;, that is, it is constrained to match only at the
        start of the string which is being searched (the &quot;subject
        string&quot;).  This effect can also be achieved by appropriate
        constructs in the pattern itself, which is the only way to
        do it in Perl.
       </span>
      </dd>
     
     
      <dt><em>D</em> (<code class="literal">PCRE_DOLLAR_ENDONLY</code>)</dt>
      <dd>
       <span class="simpara">
        If this modifier is set, a dollar metacharacter in the pattern
        matches only at the end of the subject string. Without this
        modifier, a dollar also matches immediately before the final
        character if it is a newline (but not before any other
        newlines).  This modifier is ignored if <em>m</em>
        modifier is set. There is no equivalent to this modifier in
        Perl.
       </span>
      </dd>
     
     
      <dt><em>S</em></dt>
      <dd>
       <span class="simpara">
        When a pattern is going to be used several times, it is
        worth spending more time analyzing it in order to speed up
        the time taken for matching. If this modifier is set, then
        this extra analysis is performed. At present, studying a
        pattern is useful only for non-anchored patterns that do not
        have a single fixed starting character.
        As of PHP 7.3.0 this flag has no effect.
       </span>
      </dd>
     
     
      <dt><em>U</em> (<code class="literal">PCRE_UNGREEDY</code>)</dt>
      <dd>
       <span class="simpara">
        This modifier inverts the &quot;greediness&quot; of the quantifiers so
        that they are not greedy by default, but become greedy if
        followed by <code class="literal">?</code>. It is not compatible with Perl. It can also
        be set by a <code class="literal">(?U)</code>
        <a href="regexp.reference.internal-options.php" class="link">modifier setting within
        the pattern</a> or by a question mark behind a quantifier (e.g.
        <code class="literal">.*?</code>).
       </span>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         It is usually not possible to match more than <a href="pcre.configuration.php#ini.pcre.backtrack-limit" class="link">pcre.backtrack_limit</a>
         characters in ungreedy mode.
        </p>
       </p></blockquote>
      </dd>
     
     
      <dt><em>X</em> (<code class="literal">PCRE_EXTRA</code>)</dt>
      <dd>
       <span class="simpara">
        This modifier turns on additional functionality of PCRE that
        is incompatible with Perl. Any backslash in a pattern that
        is followed by a letter that has no special meaning causes
        an error, thus reserving these combinations for future
        expansion. By default, as in Perl, a backslash followed by a
        letter with no special meaning is treated as a literal.
        There are at present no other features controlled by this
        modifier.
       </span>
      </dd>
     
     
      <dt><em>J</em> (<code class="literal">PCRE_INFO_JCHANGED</code>)</dt>
      <dd>
       <span class="simpara">
        The (?J) internal option setting changes the local <code class="literal">PCRE_DUPNAMES</code>
        option. Allow duplicate names for subpatterns.
        As of PHP 7.2.0 <code class="literal">J</code> is supported as modifier as well.
       </span>
      </dd>
     
     
      <dt><em>u</em> (<code class="literal">PCRE_UTF8</code>)</dt>
      <dd>
       <span class="simpara">
        This modifier turns on additional functionality of PCRE that
        is incompatible with Perl. Pattern and subject strings are
        treated as UTF-8. An invalid subject will cause the preg_* function to
        match nothing; an invalid pattern will trigger an error of
        level E_WARNING. Five and six octet UTF-8 sequences are
        regarded as invalid.
       </span>
      </dd>
     
     
      <dt><em>n</em> (<code class="literal">PCRE_NO_AUTO_CAPTURE</code>)</dt>
      <dd>
       <span class="simpara">
        This modifier makes simple <code class="code">(xyz)</code> groups non-capturing.
        Only named groups like <code class="code">(?&lt;name&gt;xyz)</code> are capturing.
        This only affects which groups are capturing, it is still possible to
        use numbered subpattern references, and the matches array will still
        contain numbered results. Available as of PHP 8.2.0.
       </span>
      </dd>
     
     
      <dt><em>r</em> (<code class="literal">PCRE2_EXTRA_CASELESS_RESTRICT</code>)</dt>
      <dd>
       <span class="simpara">
        When <em>u</em> (<code class="literal">PCRE_UTF8</code>) and <em>i</em> (<code class="literal">PCRE_CASELESS</code>)
        are in effect, this modifier prevents matching across ASCII and non-ASCII characters.
       </span>
       <span class="simpara">
        For example, <code class="code">preg_match(&#039;/\x{212A}/iu&#039;, &quot;K&quot;)</code> matches the Kelvin sign <code class="literal">K</code> (U+212A).
        When <em>r</em> is used (<code class="code">preg_match(&#039;/\x{212A}/iur&#039;, &quot;K&quot;)</code>), it does not match.
       </span>
       <span class="simpara">
        Available as of PHP 8.4.0.
       </span>
      </dd>
     
    </dl>
   </blockquote>
  </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.modifiers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freference.pcre.pattern.modifiers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reference.pcre.pattern.modifiers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54805">  <div class="votes">
    <div id="Vu54805">
    <a href="/manual/vote-note.php?id=54805&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54805">
    <a href="/manual/vote-note.php?id=54805&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54805" title="62% like this...">
    27
    </div>
  </div>
  <a href="#54805" class="name">
  <strong class="user"><em>hfuecks at nospam dot org</em></strong></a><a class="genanchor" href="#54805"> &para;</a><div class="date" title="2005-07-15 07:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54805">
<div class="phpcode"><code><span class="html">Regarding the validity of a UTF-8 string when using the /u pattern modifier, some things to be aware of;<br /><br />1. If the pattern itself contains an invalid UTF-8 character, you get an error (as mentioned in the docs above - "UTF-8 validity of the pattern is checked since PHP 4.3.5"<br /><br />2. When the subject string contains invalid UTF-8 sequences / codepoints, it basically result in a "quiet death" for the preg_* functions, where nothing is matched but without indication that the string is invalid UTF-8<br /><br />3. PCRE regards five and six octet UTF-8 character sequences as valid (both in patterns and the subject string) but these are not supported in Unicode ( see section 5.9 "Character Encoding" of the "Secure Programming for Linux and Unix HOWTO" - can be found at <a href="http://www.tldp.org/" rel="nofollow" target="_blank">http://www.tldp.org/</a> and other places )<br /><br />4. For an example algorithm in PHP which tests the validity of a UTF-8 string (and discards five / six octet sequences) head to: <a href="http://hsivonen.iki.fi/php-utf8/" rel="nofollow" target="_blank">http://hsivonen.iki.fi/php-utf8/</a><br /><br />The following script should give you an idea of what works and what doesn't;<br /><br /><span class="default">&lt;?php<br />$examples </span><span class="keyword">= array(<br />    </span><span class="string">'Valid ASCII' </span><span class="keyword">=&gt; </span><span class="string">"a"</span><span class="keyword">,<br />    </span><span class="string">'Valid 2 Octet Sequence' </span><span class="keyword">=&gt; </span><span class="string">"\xc3\xb1"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 2 Octet Sequence' </span><span class="keyword">=&gt; </span><span class="string">"\xc3\x28"</span><span class="keyword">,<br />    </span><span class="string">'Invalid Sequence Identifier' </span><span class="keyword">=&gt; </span><span class="string">"\xa0\xa1"</span><span class="keyword">,<br />    </span><span class="string">'Valid 3 Octet Sequence' </span><span class="keyword">=&gt; </span><span class="string">"\xe2\x82\xa1"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 3 Octet Sequence (in 2nd Octet)' </span><span class="keyword">=&gt; </span><span class="string">"\xe2\x28\xa1"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 3 Octet Sequence (in 3rd Octet)' </span><span class="keyword">=&gt; </span><span class="string">"\xe2\x82\x28"</span><span class="keyword">,<br /><br />    </span><span class="string">'Valid 4 Octet Sequence' </span><span class="keyword">=&gt; </span><span class="string">"\xf0\x90\x8c\xbc"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 4 Octet Sequence (in 2nd Octet)' </span><span class="keyword">=&gt; </span><span class="string">"\xf0\x28\x8c\xbc"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 4 Octet Sequence (in 3rd Octet)' </span><span class="keyword">=&gt; </span><span class="string">"\xf0\x90\x28\xbc"</span><span class="keyword">,<br />    </span><span class="string">'Invalid 4 Octet Sequence (in 4th Octet)' </span><span class="keyword">=&gt; </span><span class="string">"\xf0\x28\x8c\x28"</span><span class="keyword">,<br />    </span><span class="string">'Valid 5 Octet Sequence (but not Unicode!)' </span><span class="keyword">=&gt; </span><span class="string">"\xf8\xa1\xa1\xa1\xa1"</span><span class="keyword">,<br />    </span><span class="string">'Valid 6 Octet Sequence (but not Unicode!)' </span><span class="keyword">=&gt; </span><span class="string">"\xfc\xa1\xa1\xa1\xa1\xa1"</span><span class="keyword">,<br />);<br /><br />echo </span><span class="string">"++Invalid UTF-8 in pattern\n"</span><span class="keyword">;<br />foreach ( </span><span class="default">$examples </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$str </span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$name</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">.</span><span class="string">"/u"</span><span class="keyword">,</span><span class="string">'Testing'</span><span class="keyword">);<br />}<br /><br />echo </span><span class="string">"++ preg_match() examples\n"</span><span class="keyword">;<br />foreach ( </span><span class="default">$examples </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$str </span><span class="keyword">) {<br />    <br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/\xf8\xa1\xa1\xa1\xa1/u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$ar</span><span class="keyword">);<br />    echo </span><span class="string">"</span><span class="default">$name</span><span class="string">: "</span><span class="keyword">;<br /><br />    if ( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">) {<br />        echo </span><span class="string">"Matched nothing!\n"</span><span class="keyword">;<br />    } else {<br />        echo </span><span class="string">"Matched </span><span class="keyword">{</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br />    }<br />    <br />}<br /><br />echo </span><span class="string">"++ preg_match_all() examples\n"</span><span class="keyword">;<br />foreach ( </span><span class="default">$examples </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$str </span><span class="keyword">) {<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/./u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$ar</span><span class="keyword">);<br />    echo </span><span class="string">"</span><span class="default">$name</span><span class="string">: "</span><span class="keyword">;<br />    <br />    </span><span class="default">$num_utf8_chars </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    if ( </span><span class="default">$num_utf8_chars </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) {<br />        echo </span><span class="string">"Matched nothing!\n"</span><span class="keyword">;<br />    } else {<br />        echo </span><span class="string">"Matched </span><span class="default">$num_utf8_chars</span><span class="string"> character\n"</span><span class="keyword">;<br />    }<br />    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58409">  <div class="votes">
    <div id="Vu58409">
    <a href="/manual/vote-note.php?id=58409&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58409">
    <a href="/manual/vote-note.php?id=58409&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58409" title="68% like this...">
    13
    </div>
  </div>
  <a href="#58409" class="name">
  <strong class="user"><em>varrah NO_GARBAGE_OR_SPAM AT mail DOT ru</em></strong></a><a class="genanchor" href="#58409"> &para;</a><div class="date" title="2005-11-03 04:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58409">
<div class="phpcode"><code><span class="html">Spent a few days, trying to understand how to create a pattern for Unicode chars, using the hex codes. Finally made it, after reading several manuals, that weren't giving any practical PHP-valid examples. So here's one of them:<br /><br />For example we would like to search for Japanese-standard circled numbers 1-9 (Unicode codes are 0x2460-0x2468) in order to make it through the hex-codes the following call should be used:<br />preg_match('/[\x{2460}-\x{2468}]/u', $str);<br /><br />Here $str is a haystack string<br />\x{hex} - is an UTF-8 hex char-code<br />and /u is used for identifying the class as a class of Unicode chars.<br /><br />Hope, it'll be useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="125154">  <div class="votes">
    <div id="Vu125154">
    <a href="/manual/vote-note.php?id=125154&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125154">
    <a href="/manual/vote-note.php?id=125154&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125154" title="77% like this...">
    5
    </div>
  </div>
  <a href="#125154" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#125154"> &para;</a><div class="date" title="2020-06-30 01:01"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125154">
<div class="phpcode"><code><span class="html">Starting from 7.3.0, the 'S' modifier has no effect; this analysis is now always done by the PCRE engine.</span></code></div>
  </div>
 </div>
  <div class="note" id="103348">  <div class="votes">
    <div id="Vu103348">
    <a href="/manual/vote-note.php?id=103348&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103348">
    <a href="/manual/vote-note.php?id=103348&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103348" title="66% like this...">
    12
    </div>
  </div>
  <a href="#103348" class="name">
  <strong class="user"><em>phpman at crustynet dot org dot uk</em></strong></a><a class="genanchor" href="#103348"> &para;</a><div class="date" title="2011-04-08 08:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103348">
<div class="phpcode"><code><span class="html">The description of the "u" flag is a bit misleading. It suggests that it is only required if the pattern contains UTF-8 characters, when in fact it is required if either the pattern or the subject contain UTF-8. Without it, I was having problems with preg_match_all returning invalid multibyte characters when given a UTF-8 subject string.<br /><br />It's fairly clear if you read the documentation for libpcre:<br /><br />       In  order  process  UTF-8 strings, you must build PCRE to include UTF-8<br />       support in the code, and, in addition,  you  must  call  pcre_compile()<br />       with  the  PCRE_UTF8  option  flag,  or the pattern must start with the<br />       sequence (*UTF8). When either of these is the case,  both  the  pattern<br />       and  any  subject  strings  that  are matched against it are treated as<br />       UTF-8 strings instead of strings of 1-byte characters.<br /><br />[from <a href="http://www.pcre.org/pcre.txt]" rel="nofollow" target="_blank">http://www.pcre.org/pcre.txt]</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121546">  <div class="votes">
    <div id="Vu121546">
    <a href="/manual/vote-note.php?id=121546&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121546">
    <a href="/manual/vote-note.php?id=121546&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121546" title="70% like this...">
    7
    </div>
  </div>
  <a href="#121546" class="name">
  <strong class="user"><em>arash dot dalir at gmail dot com</em></strong></a><a class="genanchor" href="#121546"> &para;</a><div class="date" title="2017-08-22 11:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121546">
<div class="phpcode"><code><span class="html">the PCRE_INFO_JCHANGED modifier is apparently not accepted as a global option (after the closing delimiter) in PHP versions &lt;= 5.4 (not checked in PHP 5.5) but allowed in PHP 5.6 (also not checked in PHP 7.X)<br /><br />The following pattern doesn't work in PHP 5.4, but it works in PHP 5.6:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//test.php<br /></span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/(?&lt;dup_name&gt;\d{1,4})\-(?&lt;dup_name&gt;\d{1,2})/J'</span><span class="keyword">, </span><span class="string">'1234-23'</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />output in PHP 5.4:<br />Warning: preg_match_all(): Unknown modifier 'J' in test.php on line 3<br />NULL<br />--------------<br />output PHP 5.6:<br />array(4) { <br />    [0]=&gt; array(1)  { [0]=&gt; string(7) "1234-23" } <br />    ["dup_name"]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />    [1]=&gt; array(1) { [0]=&gt; string(4) "1234" } <br />    [2]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />}<br />*/<br /></span><span class="default">?&gt;<br /></span><br />in order to resolve this issue in PHP 5.4, one can use the (?J) pattern modifier, which indicates the pattern (from that point forward) allows duplicate names for subpatterns.<br /><br />code which works in PHP 5.4:<br /><span class="default">&lt;?php<br /><br />preg_match_all</span><span class="keyword">(</span><span class="string">'/(?J)(?&lt;dup_name&gt;\d{1,4})\-(?&lt;dup_name&gt;\d{1,2})/'</span><span class="keyword">, </span><span class="string">'1234-23'</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />output in PHP 5.4:<br />array(4) { <br />    [0]=&gt; array(1) { [0]=&gt; string(7) "1234-23" } <br />    ["dup_name"]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />    [1]=&gt; array(1) { [0]=&gt; string(4) "1234" } <br />    [2]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />}<br />--------------<br />output in PHP 5.6 (the same as with /J):<br />array(4) { <br />    [0]=&gt; array(1)  { [0]=&gt; string(7) "1234-23" } <br />    ["dup_name"]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />    [1]=&gt; array(1) { [0]=&gt; string(4) "1234" } <br />    [2]=&gt; array(1) { [0]=&gt; string(2) "23" } <br />}<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107498">  <div class="votes">
    <div id="Vu107498">
    <a href="/manual/vote-note.php?id=107498&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107498">
    <a href="/manual/vote-note.php?id=107498&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107498" title="64% like this...">
    10
    </div>
  </div>
  <a href="#107498" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#107498"> &para;</a><div class="date" title="2012-02-13 11:40"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107498">
<div class="phpcode"><code><span class="html">If the _subject_ contains utf-8 sequences the 'u' modifier should be set, otherwise a pattern such as /./ could match a utf-8 sequence as two to four individual ASCII characters. It is not a requirement, however, as you may have a need to break apart utf-8 sequences into single bytes. Most of the time, though, if you're working with utf-8 strings you should use the 'u' modifier.<br /><br />If the subject doesn't contain any utf-8 sequences (i.e. characters in the range 0x00-0x7F only) but the pattern does, as far as I can work out, setting the 'u' modifier would have no effect on the result.</span></code></div>
  </div>
 </div>
  <div class="note" id="124057">  <div class="votes">
    <div id="Vu124057">
    <a href="/manual/vote-note.php?id=124057&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124057">
    <a href="/manual/vote-note.php?id=124057&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124057" title="57% like this...">
    2
    </div>
  </div>
  <a href="#124057" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124057"> &para;</a><div class="date" title="2019-07-22 12:37"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124057">
<div class="phpcode"><code><span class="html">A warning about the /i modifier and POSIX character classes:<br />If you're using POSIX character classes in your regex that indicate case such as [:upper:] or [:lower:] in combination with the /i modifier, then in PHP &lt; 7.3 the /i modifier will take precedence and effectively make both those character classes work as [:alpha:], but in PHP &gt;= 7.3 the character classes overrule the /i modifier.</span></code></div>
  </div>
 </div>
  <div class="note" id="122429">  <div class="votes">
    <div id="Vu122429">
    <a href="/manual/vote-note.php?id=122429&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122429">
    <a href="/manual/vote-note.php?id=122429&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122429" title="53% like this...">
    1
    </div>
  </div>
  <a href="#122429" class="name">
  <strong class="user"><em>Wirek</em></strong></a><a class="genanchor" href="#122429"> &para;</a><div class="date" title="2018-02-23 12:05"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122429">
<div class="phpcode"><code><span class="html">An important addendum (with new $pat3_2 utilising \R properly, its results and comments):<br />Note that there are (sometimes difficult to grasp at first glance) nuances of meaning and application of escape sequences like \r, \R and \v - none of them is perfect in all situations, but they are quite useful nevertheless. Some official PCRE control options and their changes come in handy too - unfortunately neither (*ANYCRLF), (*ANY) nor (*CRLF) is documented here on php.net at the moment (although they seem to be available for over 10 years and 5 months now), but they are described on Wikipedia ("Newline/linebreak options" at <a href="https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions</a>) and official PCRE library site ("Newline convention" at <a href="http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17" rel="nofollow" target="_blank">http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17</a>) pretty well. The functionality of \R appears somehow disappointing (with default configuration of compile time option) according to php.net as well as official description ("Newline sequences" at <a href="https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq" rel="nofollow" target="_blank">https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq</a>) when used improperly.<br /><br />A hint for those of you who are trying to fight off (or work around at least) the problem of matching a pattern correctly at the end (or at the beginning) of any line even without the multiple lines mode (/m) or meta-character assertions ($ or ^).<br /><span class="default">&lt;?php <br /></span><span class="comment">// Various OS-es have various end line (a.k.a line break) chars:<br />// - Windows uses CR+LF (\r\n);<br />// - Linux LF (\n);<br />// - OSX CR (\r).<br />// And that's why single dollar meta assertion ($) sometimes fails with multiline modifier (/m) mode - possible bug in PHP 5.3.8 or just a "feature"(?) of default configuration option for meta-character assertions (^ and $) at compile time of PCRE.<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"ABC ABC\n\n123 123\r\ndef def\rnop nop\r\n890 890\nQRS QRS\r\r~-_ ~-_"</span><span class="keyword">;<br /></span><span class="comment">//          C          3                   p          0                   _<br /></span><span class="default">$pat3</span><span class="keyword">=</span><span class="string">'/\w\R?$/mi'</span><span class="keyword">;    </span><span class="comment">// Somehow disappointing according to php.net and pcre.org when used improperly<br /></span><span class="default">$pat3_2</span><span class="keyword">=</span><span class="string">'/\w(?=\R)/i'</span><span class="keyword">;    </span><span class="comment">// Much better with allowed lookahead assertion (just to detect without capture) without multiline (/m) mode; note that with alternative for end of string ((?=\R|$)) it would grab all 7 elements as expected, but '/(*ANYCRLF)\w$/mi' is more straightforward in use anyway<br /></span><span class="default">$p</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat3</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m3</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat3_2</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m4</span><span class="keyword">);<br />echo </span><span class="default">$str</span><span class="keyword">.</span><span class="string">"\n3 !!! </span><span class="default">$pat3</span><span class="string"> (</span><span class="default">$p</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n3_2 !!! </span><span class="default">$pat3_2</span><span class="string"> (</span><span class="default">$r</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">// Note the difference between the two very helpful escape sequences in $pat3 and $pat3_2 (\R) - for some applications at least.<br /><br />/* The code above results in the following output:<br />ABC ABC<br /><br />123 123<br />def def<br />nop nop<br />890 890<br />QRS QRS<br /><br />~-_ ~-_<br />3 !!! /\w\R?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />3_2 !!! /\w(?=\R)/i (6): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; f<br />    [3] =&gt; p<br />    [4] =&gt; 0<br />    [5] =&gt; S<br />)<br /> */<br /></span><span class="default">?&gt;<br /></span>Unfortunately, I haven't got any access to a server with the latest PHP version - my local PHP is 5.3.8 and my public host's PHP is version 5.2.17.</span></code></div>
  </div>
 </div>
  <div class="note" id="90967">  <div class="votes">
    <div id="Vu90967">
    <a href="/manual/vote-note.php?id=90967&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90967">
    <a href="/manual/vote-note.php?id=90967&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90967" title="53% like this...">
    2
    </div>
  </div>
  <a href="#90967" class="name">
  <strong class="user"><em>michal dot kocarek at brainbox dot cz</em></strong></a><a class="genanchor" href="#90967"> &para;</a><div class="date" title="2009-05-18 04:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90967">
<div class="phpcode"><code><span class="html">In case you're wondering, what is the meaning of "S" modifier, this paragraph might be useful:
<br />
<br />When "S" modifier is set, PHP calls the pcre_study() function from the PCRE API before executing the regexp. Result from the function is passed directly to pcre_exec().
<br />
<br />For more information about pcre_study() and "Studying the pattern" check the PCRE manual on <a href="http://www.pcre.org/pcre.txt" rel="nofollow" target="_blank">http://www.pcre.org/pcre.txt</a>
<br />
<br />PS: Note that function names "pcre_study" and "pcre_exec" used here refer to PCRE library functions written in C language and not to any PHP functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="122413">  <div class="votes">
    <div id="Vu122413">
    <a href="/manual/vote-note.php?id=122413&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122413">
    <a href="/manual/vote-note.php?id=122413&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122413" title="53% like this...">
    1
    </div>
  </div>
  <a href="#122413" class="name">
  <strong class="user"><em>Wirek</em></strong></a><a class="genanchor" href="#122413"> &para;</a><div class="date" title="2018-02-20 01:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122413">
<div class="phpcode"><code><span class="html">A hint for those of you who are trying to fight off (or work around at least) the problem of matching a pattern correctly at the end ($) of any line in multiple lines mode (/m).<br /><span class="default">&lt;?php <br /></span><span class="comment">// Various OS-es have various end line (a.k.a line break) chars:<br />// - Windows uses CR+LF (\r\n);<br />// - Linux LF (\n);<br />// - OSX CR (\r).<br />// And that's why single dollar meta assertion ($) sometimes fails with multiline modifier (/m) mode - possible bug in PHP 5.3.8 or just a "feature"(?).<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"ABC ABC\n\n123 123\r\ndef def\rnop nop\r\n890 890\nQRS QRS\r\r~-_ ~-_"</span><span class="keyword">;<br /></span><span class="comment">//          C          3                   p          0                   _<br /></span><span class="default">$pat1</span><span class="keyword">=</span><span class="string">'/\w$/mi'</span><span class="keyword">;    </span><span class="comment">// This works excellent in JavaScript (Firefox 7.0.1+)<br /></span><span class="default">$pat2</span><span class="keyword">=</span><span class="string">'/\w\r?$/mi'</span><span class="keyword">;<br /></span><span class="default">$pat3</span><span class="keyword">=</span><span class="string">'/\w\R?$/mi'</span><span class="keyword">;    </span><span class="comment">// Somehow disappointing according to php.net and pcre.org<br /></span><span class="default">$pat4</span><span class="keyword">=</span><span class="string">'/\w\v?$/mi'</span><span class="keyword">;<br /></span><span class="default">$pat5</span><span class="keyword">=</span><span class="string">'/(*ANYCRLF)\w$/mi'</span><span class="keyword">;    </span><span class="comment">// Excellent but undocumented on php.net at the moment<br /></span><span class="default">$n</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat1</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m1</span><span class="keyword">);<br /></span><span class="default">$o</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat2</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m2</span><span class="keyword">);<br /></span><span class="default">$p</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat3</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m3</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat4</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m4</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat5</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m5</span><span class="keyword">);<br />echo </span><span class="default">$str</span><span class="keyword">.</span><span class="string">"\n1 !!! </span><span class="default">$pat1</span><span class="string"> (</span><span class="default">$n</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n2 !!! </span><span class="default">$pat2</span><span class="string"> (</span><span class="default">$o</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n3 !!! </span><span class="default">$pat3</span><span class="string"> (</span><span class="default">$p</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n4 !!! </span><span class="default">$pat4</span><span class="string"> (</span><span class="default">$r</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n5 !!! </span><span class="default">$pat5</span><span class="string"> (</span><span class="default">$s</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m5</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">// Note the difference among the three very helpful escape sequences in $pat2 (\r), $pat3 (\R), $pat4 (\v) and altered newline option in $pat5 ((*ANYCRLF)) - for some applications at least.<br /><br />/* The code above results in the following output:<br />ABC ABC<br /><br />123 123<br />def def<br />nop nop<br />890 890<br />QRS QRS<br /><br />~-_ ~-_<br />1 !!! /\w$/mi (3): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 0<br />    [2] =&gt; _<br />)<br /><br />2 !!! /\w\r?$/mi (5): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />3 !!! /\w\R?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />) <br /><br />4 !!! /\w\v?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />5 !!! /(*ANYCRLF)\w$/mi (7): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; f<br />    [3] =&gt; p<br />    [4] =&gt; 0<br />    [5] =&gt; S<br />    [6] =&gt; _<br />)<br /> */<br /></span><span class="default">?&gt;<br /></span>Unfortunately, I haven't got any access to a server with the latest PHP version - my local PHP is 5.3.8 and my public host's PHP is version 5.2.17.</span></code></div>
  </div>
 </div>
  <div class="note" id="72997">  <div class="votes">
    <div id="Vu72997">
    <a href="/manual/vote-note.php?id=72997&amp;page=reference.pcre.pattern.modifiers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72997">
    <a href="/manual/vote-note.php?id=72997&amp;page=reference.pcre.pattern.modifiers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72997" title="51% like this...">
    1
    </div>
  </div>
  <a href="#72997" class="name">
  <strong class="user"><em>ebarnard at marathonmultimedia dot com</em></strong></a><a class="genanchor" href="#72997"> &para;</a><div class="date" title="2007-02-06 02:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72997">
<div class="phpcode"><code><span class="html">When adding comments with the /x modifier, don't use the pattern delimiter in the comments. It may not be ignored in the comments area. Example:<br /><br /><span class="default">&lt;?php<br />$target </span><span class="keyword">= </span><span class="string">'some text'</span><span class="keyword">;<br />if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/<br />                e # Comments here<br />               /x'</span><span class="keyword">,</span><span class="default">$target</span><span class="keyword">)) {<br />    print </span><span class="string">"Target 1 hit.\n"</span><span class="keyword">;<br />}<br />if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/<br />                e # /Comments here with slash<br />               /x'</span><span class="keyword">,</span><span class="default">$target</span><span class="keyword">)) {<br />    print </span><span class="string">"Target 1 hit.\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />prints "Target 1 hit." but then generates a PHP warning message for the second preg_match():<br /><br />Warning:  preg_match() [function.preg-match]: Unknown modifier 'C' in /ebarnard/x-modifier.php on line 11</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reference.pcre.pattern.modifiers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pcre.pattern.php">PCRE Patterns</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reference.pcre.pattern.syntax.php" title="PCRE regex syntax">PCRE regex syntax</a>
                        </li>
                                                <li class="current">
                            <a href="reference.pcre.pattern.modifiers.php" title="Possible modifiers in regex patterns">Possible modifiers in regex patterns</a>
                        </li>
                                                <li class="">
                            <a href="reference.pcre.pattern.differences.php" title="Differences From Perl">Differences From Perl</a>
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
