<?php

namespace popp\ch05\batch04;

use popp\ch05\batch04\util\TreeLister;

TreeLister::helloWorld(); // access local
\TreeLister::helloWorld(); // access from root
