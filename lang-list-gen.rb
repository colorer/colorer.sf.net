#!/usr/bin/ruby

list = `../colorer/bin/colorer -l`

groups = {}

list.each_line {|l|
  g, t = l.split /:\s+/
  t.chomp!
  groups[g] = [] if groups[g].nil?
  groups[g] << t
}

groups.each_key {|g|
  puts "<h3>#{g}:</h3>"
  groups[g].each{ |type|
    puts "#{type}, "
  }
}