<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Repetition - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.repetition.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.repetition.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.repetition.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.subpatterns.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.back-references.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.repetition.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.repetition.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.repetition.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.repetition.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.repetition.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.repetition.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.repetition.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.repetition.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.repetition.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.repetition.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.repetition.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Repetition" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Repetition - Manual" />
<meta name="twitter:description" content="Repetition" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Repetition - Manual" />
<meta itemprop="description" content="Repetition" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Repetition" />

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
        <a href="regexp.reference.back-references.php">
          Back references &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.subpatterns.php">
          &laquo; Subpatterns        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      <li><a href='reference.pcre.pattern.syntax.php'>PCRE regex syntax</a></li>      </ul>
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
            <option value='en/regexp.reference.repetition.php' selected="selected">English</option>
            <option value='de/regexp.reference.repetition.php'>German</option>
            <option value='es/regexp.reference.repetition.php'>Spanish</option>
            <option value='fr/regexp.reference.repetition.php'>French</option>
            <option value='it/regexp.reference.repetition.php'>Italian</option>
            <option value='ja/regexp.reference.repetition.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.repetition.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.repetition.php'>Russian</option>
            <option value='tr/regexp.reference.repetition.php'>Turkish</option>
            <option value='uk/regexp.reference.repetition.php'>Ukrainian</option>
            <option value='zh/regexp.reference.repetition.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.repetition" class="section">
  <h2 class="title">Repetition</h2>
  <p class="para">
   Repetition is specified by quantifiers, which can follow any
   of the following items:

   <ul class="itemizedlist">
    <li class="listitem"><span class="simpara">a single character, possibly escaped</span></li>
    <li class="listitem"><span class="simpara">the . metacharacter</span></li>
    <li class="listitem"><span class="simpara">a character class</span></li>
    <li class="listitem"><span class="simpara">a back reference (see next section)</span></li>
    <li class="listitem"><span class="simpara">a parenthesized subpattern (unless it is an assertion -
     see below)</span></li>
   </ul>
  </p>
  <p class="para">
   The general repetition quantifier specifies a minimum and
   maximum number of permitted matches, by giving the two
   numbers in curly brackets (braces), separated by a comma.
   The numbers must be less than 65536, and the first must be
   less than or equal to the second. For example:

   <code class="literal">z{2,4}</code>

   matches &quot;zz&quot;, &quot;zzz&quot;, or &quot;zzzz&quot;. A closing brace on its own
   is not a special character. If the second number is omitted,
   but the comma is present, there is no upper limit; if the
   second number and the comma are both omitted, the quantifier
   specifies an exact number of required matches. Thus

   <code class="literal">[aeiou]{3,}</code>

   matches at least 3 successive vowels, but may match many
   more, while

   <code class="literal">\d{8}</code>

   matches exactly 8 digits.

  </p>
  <p class="simpara">
   Prior to PHP 8.4.0, an opening curly bracket that
   appears in a position where a quantifier is not allowed, or
   one that does not match the syntax of a quantifier, is taken
   as a literal character. For example, <code class="literal">{,6}</code>
   is not a quantifier, but a literal string of four characters.

   As of PHP 8.4.0, the PCRE extension is bundled with PCRE2 version 10.44,
   which allows patterns such as <code class="literal">\d{,8}</code> and they are
   interpreted as <code class="literal">\d{0,8}</code>.

   Further, as of PHP 8.4.0, space characters around quantifiers such as
   <code class="literal">\d{0 , 8}</code> and <code class="literal">\d{ 0 , 8 }</code> are allowed.
  </p>
  <p class="para">
   The quantifier {0} is permitted, causing the expression to
   behave as if the previous item and the quantifier were not
   present.
  </p>
  <p class="para">
   For convenience (and historical compatibility) the three
   most common quantifiers have single-character abbreviations:

   <table class="doctable table">
    <caption><strong>Single-character quantifiers</strong></caption>
    
     <tbody class="tbody">
      <tr>
       <td><code class="literal">*</code></td>
       <td>equivalent to <code class="literal">{0,}</code></td>
      </tr>

      <tr>
       <td><code class="literal">+</code></td>
       <td>equivalent to <code class="literal">{1,}</code></td>
      </tr>

      <tr>
       <td><code class="literal">?</code></td>
       <td>equivalent to <code class="literal">{0,1}</code></td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   It is possible to construct infinite loops by following a
   subpattern that can match no characters with a quantifier
   that has no upper limit, for example:

   <code class="literal">(a?)*</code>
  </p>
  <p class="para">
   Earlier versions of Perl and PCRE used to give an error at
   compile time for such patterns. However, because there are
   cases where this can be useful, such patterns are now
   accepted, but if any repetition of the subpattern does in
   fact match no characters, the loop is forcibly broken.
  </p>
  <p class="para">
   By default, the quantifiers are &quot;greedy&quot;, that is, they
   match as much as possible (up to the maximum number of permitted
   times), without causing the rest of the pattern to
   fail. The classic example of where this gives problems is in
   trying to match comments in C programs. These appear between
   the sequences /* and */ and within the sequence, individual
   * and / characters may appear. An attempt to match C comments
   by applying the pattern

   <code class="literal">/\*.*\*/</code>

   to the string

   <code class="literal">/* first comment */ not comment /* second comment */</code>

   fails, because it matches the entire string due to the
   greediness of the .* item.
  </p>
  <p class="para">
   However, if a quantifier is followed by a question mark,
   then it becomes lazy, and instead matches the minimum
   number of times possible, so the pattern

   <code class="literal">/\*.*?\*/</code>

   does the right thing with the C comments. The meaning of the
   various quantifiers is not otherwise changed, just the preferred
   number of matches. Do not confuse this use of
   question mark with its use as a quantifier in its own right.
   Because it has two uses, it can sometimes appear doubled, as
   in

   <code class="literal">\d??\d</code>

   which matches one digit by preference, but can match two if
   that is the only way the rest of the pattern matches.
  </p>
  <p class="para">
   If the <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_UNGREEDY</a>
   option is set (an option which is not
   available in Perl) then the quantifiers are not greedy by
   default, but individual ones can be made greedy by following
   them with a question mark. In other words, it inverts the
   default behaviour.
  </p>
  <p class="para">
   Quantifiers followed by <code class="literal">+</code> are &quot;possessive&quot;. They eat
   as many characters as possible and don&#039;t return to match the rest of the
   pattern. Thus <code class="literal">.*abc</code> matches &quot;aabc&quot; but
   <code class="literal">.*+abc</code> doesn&#039;t because <code class="literal">.*+</code> eats the
   whole string. Possessive quantifiers can be used to speed up processing.
  </p>
  <p class="para">
   When a parenthesized subpattern is quantified with a minimum
   repeat count that is greater than 1 or with a limited maximum,
   more store is required for the compiled pattern, in
   proportion to the size of the minimum or maximum.
  </p>
  <p class="para">
   If a pattern starts with .* or .{0,} and the <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_DOTALL</a>
   option (equivalent to Perl&#039;s /s) is set, thus allowing the .
   to match newlines, then the pattern is implicitly anchored,
   because whatever follows will be tried against every character
   position in the subject string, so there is no point in
   retrying the overall match at any position after the first.
   PCRE treats such a pattern as though it were preceded by \A.
   In cases where it is known that the subject string contains
   no newlines, it is worth setting <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_DOTALL</a> when the
   pattern begins with .* in order to
   obtain this optimization, or
   alternatively using ^ to indicate anchoring explicitly.
  </p>
  <p class="para">
   When a capturing subpattern is repeated, the value captured
   is the substring that matched the final iteration. For example, after

   <code class="literal">(tweedle[dume]{3}\s*)+</code>

   has matched &quot;tweedledum tweedledee&quot; the value of the captured
   substring is &quot;tweedledee&quot;. However, if there are
   nested capturing subpatterns, the corresponding captured
   values may have been set in previous iterations. For example,
   after

   <code class="literal">/(a|(b))+/</code>

   matches &quot;aba&quot; the value of the second captured substring is
   &quot;b&quot;.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.repetition%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.repetition&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.repetition.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reference.pcre.pattern.syntax.php">PCRE regex syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="regexp.introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.delimiters.php" title="Delimiters">Delimiters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.meta.php" title="Meta-&#8203;characters">Meta-&#8203;characters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.escape.php" title="Escape sequences">Escape sequences</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.unicode.php" title="Unicode character properties">Unicode character properties</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.anchors.php" title="Anchors">Anchors</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.dot.php" title="Dot">Dot</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.character-classes.php" title="Character classes">Character classes</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.alternation.php" title="Alternation">Alternation</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.internal-options.php" title="Internal option setting">Internal option setting</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.subpatterns.php" title="Subpatterns">Subpatterns</a>
                        </li>
                                                <li class="current">
                            <a href="regexp.reference.repetition.php" title="Repetition">Repetition</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.back-references.php" title="Back references">Back references</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.assertions.php" title="Assertions">Assertions</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.onlyonce.php" title="Once-&#8203;only subpatterns">Once-&#8203;only subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.conditional.php" title="Conditional subpatterns">Conditional subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.comments.php" title="Comments">Comments</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.recursive.php" title="Recursive patterns">Recursive patterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.performance.php" title="Performance">Performance</a>
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
