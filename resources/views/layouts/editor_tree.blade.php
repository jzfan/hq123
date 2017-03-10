        <li class="header">代理商</li>
        <li><a href="/agents/{{ \Auth::user()->id }}/b4"><i class="fa fa-circle-o text-red"></i> <span>贷款前</span></a></li>
        <li><a href="/agents/{{ \Auth::user()->id }}/ing"><i class="fa fa-circle-o text-yellow"></i> <span>贷款中</span></a></li>
        <li><a href="/agents/{{ \Auth::user()->id }}/after"><i class="fa fa-circle-o text-aqua"></i> <span>贷款后</span></a></li>
