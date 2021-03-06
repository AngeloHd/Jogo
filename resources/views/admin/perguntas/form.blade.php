
@csrf
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pergunta <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
         <input type="text" name="pergunta" required="required" class="form-control col-md-7 col-xs-12" value="{{$pergunta->pergunta ?? old ('pergunta')}}" minlength="10">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nivel
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" name="nivel_id">
            @foreach ($nivels as $nivel )
            <option value="{{ $nivel->id }}">{{ $nivel->nivel }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Resposta Certa <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="certa" required="required" class="form-control col-md-7 col-xs-12" value="{{$pergunta->certa ?? old ('certa')}}">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resposta Errada 1 <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="errada1" name="errada1" required="required" class="form-control col-md-7 col-xs-12" value="{{$pergunta->errada1 ?? old ('errada1')}}">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Resposta Errada 2<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="errada2" name="errada2" required="required"  class="form-control col-md-7 col-xs-12"  value="{{$pergunta->errada2 ?? old ('errada2')}}">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Resposta Errada 3 <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="errada3" type="text" name="errada3" class="optional form-control col-md-7 col-xs-12"  value="{{$pergunta->errada3 ?? old ('errada3')}}">
    </div>
</div>
<div class="ln_solid"></div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
