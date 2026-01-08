---
id: 1cea8264-e53f-4242-ac2f-d64f3593e161
blueprint: html
title: 'BDI Element: Isolating Bidirectional Text'
teaser: 'The bdi HTML element is used to isolate a span of text that might have a different text direction, ensuring it is displayed correctly in bidirectional text contexts.'
reference_title:
  code: '<bdi>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' HTML element, known as the Bidirectional Isolate element, is used to isolate a span of text that may have a different text direction than the surrounding content. This is particularly useful in multilingual web pages where text can be written in both left-to-right (LTR) and right-to-left (RTL) directions. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' element ensures that the directionality of the embedded text does not affect or get affected by the surrounding text, making it ideal for dynamically inserted content where the directionality is unknown or mixed.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: " tag is beneficial in scenarios where text directionality can lead to rendering issues, such as when displaying user-generated content or data retrieved from a database. For example, if a user's name in Arabic (an RTL language) is displayed alongside English text (an LTR language), the "
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' element can be used to prevent the Arabic text from disrupting the layout of the surrounding English text. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ul>
            <li>User <bdi>إيان</bdi>: 90 points</li>
            <li>User <bdi>jdoe</bdi>: 80 points</li>
          </ul>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' element does not have any specific attributes of its own, but it supports all global and event attributes. Notably, the '
      -
        type: text
        marks:
          -
            type: code
        text: dir
      -
        type: text
        text: ' attribute defaults to '
      -
        type: text
        marks:
          -
            type: code
        text: auto
      -
        type: text
        text: ', which allows the user agent to determine the correct directionality based on the content within the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' element.In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<bdi>'
      -
        type: text
        text: ' element is a powerful tool for managing bidirectional text in HTML, ensuring that text with different directional properties can coexist without causing layout issues. It is particularly useful in multilingual and user-generated content scenarios, where text directionality may not be predictable.'
link: 'https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-bdi-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: inline_text_semantics
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364913
seo_title: 'HTML BDI Element: Bidirectional Isolation Explained'
seo_description: 'Explore the bdi HTML element for isolating text with different directions, ensuring proper display in mixed-direction content.'
og_title: 'Understanding the HTML BDI Element'
og_description: 'Learn how the bdi element in HTML is used to isolate text with different directions, ensuring correct display in bidirectional contexts.'
date: '2025-03-30'
---
